<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoupleRoomResource\Pages;
use App\Filament\Resources\CoupleRoomResource\RelationManagers;
use App\Models\CoupleRoom;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class CoupleRoomResource extends Resource
{
    protected static ?string $model = CoupleRoom::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('short_description')
                    ->maxLength(500)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('is_active')
                    ->required()
                    ->default(true),
                
                // Room Specs Repeater
                Repeater::make('room_specs')
                    ->schema([
                        Forms\Components\TextInput::make('spec')
                            ->required()
                            ->placeholder('e.g., Size: 10 m² / 15.4 ft²')
                    ])
                    ->label('Room Specifications')
                    ->grid(2)
                    ->defaultItems(2)
                    ->columnSpanFull(),
                
                // Amenities Repeater
                Repeater::make('amenities')
                    ->schema([
                        Forms\Components\TextInput::make('amenity')
                            ->required()
                            ->placeholder('e.g., 2 Star Super deluxe AC Rooms')
                    ])
                    ->label('Amenities')
                    ->grid(2)
                    ->defaultItems(3)
                    ->columnSpanFull(),
                
                // Image Upload
                Forms\Components\SpatieMediaLibraryFileUpload::make('images')
                    ->collection('couple_room_images')
                    ->multiple()
                    ->reorderable()
                    ->image()
                    ->imageEditor()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListCoupleRooms::route('/'),
            'create' => Pages\CreateCoupleRoom::route('/create'),
            'edit' => Pages\EditCoupleRoom::route('/{record}/edit'),
        ];
    }
}