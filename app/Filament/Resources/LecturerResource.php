<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LecturerResource\Pages;
use App\Filament\Resources\LecturerResource\RelationManagers;
use App\Models\Lecturer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LecturerResource extends Resource
{
    protected static ?string $model = Lecturer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->placeholder("Masukkan Nama")
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->placeholder("Masukkan Email")
                    ->required(),
                Forms\Components\Select::make('skill')
                    ->label('Keahlian')
                    ->required()
                    ->options([
                        'RPL' => 'RPL (Rekayasa Perangkat Lunak)',
                        'KBJ' => 'KBJ (Komputasi Berbasis Jaringan)',
                        'KCV' => 'KCV (Komputasi Cerdas dan Visualisasi)',
                    ]),
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->required(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Foto'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('skill')
                    ->label('Keahlian')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListLecturers::route('/'),
            'create' => Pages\CreateLecturer::route('/create'),
            'edit' => Pages\EditLecturer::route('/{record}/edit'),
        ];
    }
}
