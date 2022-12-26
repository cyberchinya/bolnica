<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Closure;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static function getNavigationLabel(): string
    {
        return __('Новости');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Card::make()->schema([
                     TextInput::make('title')
                         ->label('Название')
                         ->reactive()
                         ->afterStateUpdated(function (Closure $set, $state) {
                             $set('slug', Str::slug($state));
                         })->required(),
/*                     TextInput::make('desk')->required()
                     ->label('Заголовок'),*/
                     TinyEditor::make('content')->required()
                     ->label('Описание'),
                     Toggle::make('is_published')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable()->label('номер'),
                TextColumn::make('title')->limit(20)->sortable()->searchable()->label('заголовок'),
                TextColumn::make('desk')->limit(1000)->sortable()->searchable()->label('описание'),
                BooleanColumn::make('is_published')->searchable()->label('опубликовано'),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
