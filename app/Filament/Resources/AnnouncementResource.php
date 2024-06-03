<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnnouncementResource\Pages;
use App\Filament\Resources\AnnouncementResource\RelationManagers;
use App\Models\Announcement;
use DeepCopy\Filter\Filter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                // $table->string('title');
                // $table->string("schedule");
                // $table->date("date");

                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required(),
                Forms\Components\TimePicker::make('schedule')
                    ->label('Jadwal')
                    ->required(),
                Forms\Components\DatePicker::make('date')
                    ->label('Tanggal')
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
                    ->sortable(),
                Tables\Columns\TextColumn::make('schedule')
                    ->label('Jadwal')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->label('Tanggal')
                    ->searchable()
                    ->sortable(),

            ])->defaultSort('created_at', 'desc')
            ->filters([
                //   filter by date
                Tables\Filters\SelectFilter::make('date')
                    ->label('Date')
                    ->options([
                        'today' => 'Today',
                        'yesterday' => 'Yesterday',
                        'last 7 days' => 'Last 7 Days',
                        'last 30 days' => 'Last 30 Days',
                        'this month' => 'This Month',
                        'last month' => 'Last Month',
                        'this year' => 'This Year',
                        'last year' => 'Last Year',
                    ]),
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
            'index' => Pages\ListAnnouncements::route('/'),
            'create' => Pages\CreateAnnouncement::route('/create'),
            'edit' => Pages\EditAnnouncement::route('/{record}/edit'),
        ];
    }
}
