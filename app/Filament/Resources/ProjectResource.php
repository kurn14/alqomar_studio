<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    use Translatable;
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    public static function getModelLabel(): string
    {
        return __('Project');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->columns(12)
            ->schema([

                //buatkan 2 section untuk title dan content
                Forms\Components\Section::make()
                    ->columnSpan(8)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label(__('Project Title'))
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('slug')
                            ->label(__('Slug'))
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                            //buatkan text area richeditor
                        Forms\Components\RichEditor::make('content')
                            ->label(__('Project Description'))
                            ->required()
                            ->columnSpanFull()
                    ]),

                Forms\Components\Section::make()
                    ->columnSpan(4)
                    ->schema([
                        //buatkan image upload
                        Forms\Components\FileUpload::make('image')
                            ->label(__('Project Image'))
                            ->image()
                            ->required()
                            ->columnSpanFull()
                            ->imageEditor()
                            ->directory(config('services.disk.project')),
                        // buatkan select category
                        Forms\Components\Select::make('category_id')
                            ->label(__('Category'))
                            ->relationship('category', 'name->' . app()->getLocale()),

                        //buatkan tag menggunakan multiple checklist
                        Forms\Components\CheckboxList::make('tags')
                            ->label(__('Tags'))
                            ->relationship('tags')
                            ->options(
                                Tag::orderBy('name->' . app()->getLocale())->get()->pluck('name', 'id')
                            )
                            ->required()

                    ])

                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //buatkan coloumn untuk title, slug, content, image, project_date, client, url
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('Project Image')),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('Project Title'))
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('slug')
                    ->label(__('Slug'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label(__('Category'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tags.name')
                    ->label(__('Tags'))
                    ->searchable()
                    ->sortable()
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
