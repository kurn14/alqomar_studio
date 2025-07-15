<?php

namespace App\Filament\Resources\ProjectResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\Concerns\Translatable;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonialsRelationManager extends RelationManager
{

    use Translatable;

    protected static string $relationship = 'testimonials';
    
    //ganti nama tab pada relation manager di bagian atas


    public function form(Form $form): Form
    {
        $locales = config('services.locales.available');

        $fields = [];
        $fields[] = TextInput::make('name')
            ->label(__('Name'))
            ->required()
            ->maxLength(255);
        $fields[] = TextInput::make('position')
            ->label(__('Position'))
            ->required()
            ->maxLength(255);
        $fields[] = TextInput::make('company')
            ->label(__('Company'))
            ->required()
            ->maxLength(255);
        foreach ($locales as $locale) {
            $fields[] = Forms\Components\Textarea::make("message.{$locale}")
                ->label(__('Testimonial Message') . " ({$locale})")
                ->required()
                ->maxLength(1000);
        }
        $fields[] = Forms\Components\FileUpload::make('image')
            ->label(__('User Image'))
            ->image()
            ->required()
            ->columnSpanFull()
            ->imageEditor()
            ->directory(config('services.disk.testimonial'));
        return $form
            ->schema($fields);
    }

    public function table(Table $table): Table
    {
        return $table
            // ->heading(__('Testimonials'))
            // ->pluralModelLabel(__('Testimonials'))
            // ->modelLabel(__('Testimonial'))
            // ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label(__('Image'))
                    ->circular(),
                Tables\Columns\TextColumn::make('name')->label(__('Name'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('position')->label(__('Position'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('company')->label(__('Company'))
                    ->searchable()
                    ->sortable(),

                    
                Tables\Columns\TextColumn::make('message')->label(__('Message'))
                    ->searchable()
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\LocaleSwitcher::make(),
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('Testimonials') . ' - ' . $ownerRecord->title;
    }

    public static function getModelLabel(): string
    {
        return __('Testimonial');
    }
    public static function getPluralModelLabel(): string
    {
        return __('Testimonials');
    }
}
