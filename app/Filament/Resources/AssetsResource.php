<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Assets;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use function Laravel\Prompts\select;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AssetsResource\Pages;

use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AssetsResource\RelationManagers;
use App\Models\Category;
use Filament\Tables\Columns\TextColumn;

class AssetsResource extends Resource
{
    protected static ?string $model = Assets::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('asset_name')->required(),
                TextInput::make('asset_description'),
                TextInput::make('serial_no')->required(),
                TextInput::make('fa_no')->required(),
                Select::make('category_id')->required()
                    ->label('Select Category')
                    ->options(Category::all()->pluck('category_name', 'id')->toArray()),
            ]);
                
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('asset_name')->label('Asset Name'),
                TextColumn::make('asset_description')->label('Asset Description'),
                TextColumn::make('serial_no')->label('Serial No'),
                TextColumn::make('fa_no')->label('FA No'),
                TextColumn::make('category.category_name')->label('Category'),
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
            'index' => Pages\ListAssets::route('/'),
            'create' => Pages\CreateAssets::route('/create'),
            'edit' => Pages\EditAssets::route('/{record}/edit'),
        ];
    }
}
