<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReceptionResource\Pages;
use App\Filament\Resources\ReceptionResource\RelationManagers;
use App\Models\Reception;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReceptionResource extends Resource
{
    protected static ?string $model = Reception::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                //     $table->integer('capacity');
                // $table->integer('registrant');
                // $table->integer('passed');
                // $table->integer('year');
                Forms\Components\TextInput::make('capacity')
                    ->label('Kapasitas')
                    ->required(),
                Forms\Components\TextInput::make('registrant')
                    ->label('Jumlah Pendaftar')
                    ->required(),
                Forms\Components\TextInput::make('passed')
                    ->label('Jumlah Lulus')
                    ->required(),
                Forms\Components\TextInput::make('year')
                    ->label('Tahun')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('capacity')
                    ->label('Kapasitas')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('registrant')
                    ->label('Jumlah Pendaftar')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('passed')
                    ->label('Jumlah Lulus')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('year')
                    ->label('Tahun')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListReceptions::route('/'),
            'create' => Pages\CreateReception::route('/create'),
            'edit' => Pages\EditReception::route('/{record}/edit'),
        ];
    }
}
