<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurdoctorResource\Pages;
use App\Filament\Resources\OurdoctorResource\RelationManagers;
use App\Models\Ourdoctor;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class OurdoctorResource extends Resource
{
    protected static ?string $model = Ourdoctor::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static function getNavigationLabel(): string
    {
        return __('Наши врачи');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')
                    ->label('заголовок')
                    ->reactive()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug', Str::slug($state));
                        })->required(),
                    TextInput::make('desk')->label('специальность'),
                    FileUpload::make('image')->image()->label('фото'),
                    FileUpload::make('document')->acceptedFileTypes(['storage/pdf'])->label('загрузить файл'),
                    TinyEditor::make('content')->required()->label('о враче'),
                    Toggle::make('is_published')->label('видимость')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable()->label('номер'),
                TextColumn::make('title')->limit(20)->label('специальность')->sortable()->searchable(),
                TextColumn::make('desk')->limit(50)->label('описание')->sortable()->searchable(),
                ImageColumn::make('image')->label('фото'),
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
            'index' => Pages\ListOurdoctors::route('/'),
            'create' => Pages\CreateOurdoctor::route('/create'),
            'edit' => Pages\EditOurdoctor::route('/{record}/edit'),
        ];
    }
}
