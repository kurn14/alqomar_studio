<?php

namespace App\Filament\Resources\ProjectResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
// use Filament\Resources\RelationManagers\Concerns\Translatable;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImagesRelationManager extends RelationManager
{

    // use Translatable;
    //tidak usah pakai use Translatable karena bug dari spatie/laravel-translatable untuk relation manager

    protected static string $relationship = 'images';

    public function form(Form $form): Form
    {
        $locales = config('services.locales.available');
        $fields = [];
        foreach ($locales as $locale) {
            $fields[] = Forms\Components\Textarea::make("description.{$locale}")
                ->label(__('Description') . " ({$locale})")
                ->required()
                ->maxLength(1000);
        }


        $fields[] = Forms\Components\FileUpload::make('path')
            ->label(__('Slide Image'))
            ->image()
            ->required()
            ->columnSpanFull()
            ->imageEditor()
            ->directory(config('services.disk.project_image'));
        return $form
            ->schema($fields);
    }

    public function table(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('sort', 'asc')
            ->columns([
                Tables\Columns\ImageColumn::make('path')
                    ->label(__('Slide Image')),
                Tables\Columns\TextColumn::make('description'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\LocaleSwitcher::make(),
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
        return __('Slides');
    }

    public static function getModelLabel(): string
    {
        return __('Slide');
    }
    public static function getPluralModelLabel(): string
    {
        return __('Slides');
    }

}
