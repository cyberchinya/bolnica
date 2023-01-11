<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VakancyResource\Pages;
use App\Filament\Resources\VakancyResource\RelationManagers;
use App\Models\Vakancy;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class VakancyResource extends Resource
{
    protected static ?string $model = Vakancy::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static function getNavigationLabel(): string
    {
        return __('Вакансии');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
 /*                   TextInput::make('title')
                        ->reactive()
                        ->label('Загаловок')
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug', Str::slug($state));
                        }),*/
                    /*TextInput::make('desk')->label('Описание'),*/
                    TinyEditor::make('content')->required()->label('Контент'),
                    Toggle::make('is_published')->label('видимость')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable()->label('номер'),
                TextColumn::make('title')->limit(20)->sortable()->searchable()->label('вакансия'),
                TextColumn::make('desk')->limit(50)->sortable()->searchable()->label('описание'),
                BooleanColumn::make('is_published')->searchable()->label('видимость'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListVakancies::route('/'),
            'create' => Pages\CreateVakancy::route('/create'),
            'edit' => Pages\EditVakancy::route('/{record}/edit'),
        ];
    }
}
