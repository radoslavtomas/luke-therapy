<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Page settings')
                    ->schema([
                        Forms\Components\TextInput::make('page_title')->required(),
                        Forms\Components\TextInput::make('page_subtitle')->required(),
                        Forms\Components\Textarea::make('page_description')->required(),
                        Forms\Components\Textarea::make('page_keywords')->required(),
                        ])->columns(1),
                Fieldset::make('Contact details')
                    ->schema([
                        Forms\Components\TextInput::make('address_line1')->required(),
                        Forms\Components\TextInput::make('address_line2')->required(),
                        Forms\Components\TextInput::make('address_line3')->required(),
                        Forms\Components\TextInput::make('postcode')->required(),
                        Forms\Components\TextInput::make('phone')->required(),
                        Forms\Components\TextInput::make('email')->required(),
                    ])->columns(1),
                Fieldset::make('Map iFrame')
                    ->schema([
                        Forms\Components\Textarea::make('map')->required(),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_title'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('email'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSettings::route('/'),
            // 'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
