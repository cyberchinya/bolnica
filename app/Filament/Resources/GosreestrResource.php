<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GosreestrResource\Pages;
use App\Filament\Resources\GosreestrResource\RelationManagers;
use App\Models\Gosreestr;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
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

class GosreestrResource extends Resource
{
    protected static ?string $model = Gosreestr::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static function getNavigationLabel(): string
    {
        return __('Лист записи гос. реестра');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')
                        ->label('Заголовок')
                        ->reactive()
                       /* ->required()*/
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('desk')
                        ->label('Название'),
                    TinyEditor::make('content')->required()
                        ->label('Описание'),
                    Toggle::make('is_published')->label('видимость')

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable()->label('номер'),
                TextColumn::make('title')->limit(50)->sortable()->searchable()->label('название'),
                TextColumn::make('desk')->limit(1000)->sortable()->searchable()->label('описание'),
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
            'index' => Pages\ListGosreestrs::route('/'),
            'create' => Pages\CreateGosreestr::route('/create'),
            'edit' => Pages\EditGosreestr::route('/{record}/edit'),
        ];
    }
}
