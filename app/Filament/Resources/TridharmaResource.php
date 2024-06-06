<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TridharmaResource\Pages;
use App\Filament\Resources\TridharmaResource\RelationManagers;
use App\Models\Tridharma;
use Filament\Forms;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TridharmaResource extends Resource
{
    protected static ?string $model = Tridharma::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->placeholder("Masukkan Judul")
                    ->required(),
                Forms\Components\TextInput::make('year')
                    ->label('Tahun')
                    ->type('number')
                    ->placeholder("Masukkan Tahun")
                    ->required(),
                Forms\Components\Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'pengabdian' => 'Pengabdian',
                        'penelitian' => 'Penelitian',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('source')
                    ->label('Sumber')
                    ->placeholder("Masukkan Sumber")
                    ->required(),
                Forms\Components\Select::make('lecturer_id')
                    ->label('Dosen')
                    ->relationship('lecturer', 'name')
                    ->required(),
                Forms\Components\FileUpload::make('file')
                    ->label('File')
                    ->acceptedFileTypes(['application/pdf'])
                    ->required(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->words(5),
                Tables\Columns\TextColumn::make('year')
                    ->label('Tahun')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lecturer.name')
                    ->label('Dosen')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('file')
                    ->label('File')

            ])
            ->filters([
                //
                Tables\Filters\SelectFilter::make('category')
                    ->label('Kategori')
                    ->options([
                        'pengabdian' => 'Pengabdian',
                        'penelitian' => 'Penelitian',
                    ]),
                Tables\Filters\SelectFilter::make('lecturer_id')
                    ->label('Dosen')
                    ->relationship('lecturer', 'name'),

            ])->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListTridharmas::route('/'),
            'create' => Pages\CreateTridharma::route('/create'),
            'edit' => Pages\EditTridharma::route('/{record}/edit'),
        ];
    }
}
