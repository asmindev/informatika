<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('history')
                    ->label('Sejarah')
                    ->required(),
                Forms\Components\RichEditor::make('purpose')
                    ->label('Tujuan')
                    ->required(),
                Forms\Components\RichEditor::make('mission')
                    ->label('Misi')
                    ->required(),
                Forms\Components\RichEditor::make('vision')
                    ->label('Visi')
                    ->required(),
                Forms\Components\RichEditor::make('target')
                    ->label('Target')
                    ->required(),
                Forms\Components\RichEditor::make('strategy')
                    ->label('Strategi')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('history')
                    ->label('Sejarah')
                    ->words(10),
                Tables\Columns\TextColumn::make('purpose')
                    ->label('Tujuan')
                    ->words(10),
                Tables\Columns\TextColumn::make('mission')
                    ->label('Misi')
                    ->words(10),
                Tables\Columns\TextColumn::make('vision')
                    ->label('Visi')
                    ->words(10),
                Tables\Columns\TextColumn::make('target')
                    ->label('Target')
                    ->words(10),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
