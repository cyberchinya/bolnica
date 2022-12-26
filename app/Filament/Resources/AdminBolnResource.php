<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdminBolnResource\Pages;
use App\Filament\Resources\AdminBolnResource\RelationManagers;
use App\Models\AdminBoln;
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

class AdminBolnResource extends Resource
{
    protected static ?string $model = AdminBoln::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static function getNavigationLabel(): string
    {
        return __('Администрация больницы');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')
                        ->label('Заголовок')
                        ->reactive()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug', Str::slug($state));
                        }),
                    TinyEditor::make('content')
                        ->label('Описание')
                        ->required(),
                    Toggle::make('is_published')
                    ->label('опубликовать?')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('title')->limit(20)->sortable()->searchable(),
                TextColumn::make('deskription')->limit(50)->sortable()->searchable(),
                BooleanColumn::make('is_published')->searchable(),
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
            'index' => Pages\ListAdminBolns::route('/'),
            'create' => Pages\CreateAdminBoln::route('/create'),
            'edit' => Pages\EditAdminBoln::route('/{record}/edit'),
        ];
    }
}
