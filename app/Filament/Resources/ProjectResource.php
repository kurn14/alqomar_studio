<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
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

                            //buatkan text area richeditor
                        Forms\Components\RichEditor::make('content')
                            ->label(__('Project Description'))
                            ->required()
                            ->columnSpanFull()





                    ]),

                Forms\Components\Section::make()
                    ->columnSpan(4)
                    ->schema([
                        // buatkan select category
                        Forms\Components\Select::make('category')
                            ->label(__('Project Category'))
                            ->relationship('category', 'name->' . app()->getLocale()),
                            
                        //buatkan image upload
                        Forms\Components\FileUpload::make('image')
                            ->label(__('Project Image'))
                            ->image()
                            ->required()
                            ->maxSize(1024) // 1MB
                            ->columnSpanFull()
                            ->imageEditor()
                            ->directory(config('services.disk.project'))
                    ])

                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
