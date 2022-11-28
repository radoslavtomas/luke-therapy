<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Placeholder;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('url')->required(),
                Forms\Components\TextInput::make('position')->required(),
//                Forms\Components\Grid::make()
//                    ->schema([
//                        Forms\Components\Checkbox::make('is_dynamic'),
//                        Placeholder::make('Dynamic vs Static')
//                            ->content('If content that belongs to category is dynamic (e.g. blog posts) check "Is dynamic" box. If your content is static (e.g. pages like "Contact", "About me") make sure to uncheck "Is dynamic" box and select page belonging to category. LUKE! YOU DON\'T HAVE ANY DYNAMIC PAGES RIGHT NOW, DON\'T MESS WITH IT :D:D:D')
//                    ])
//                    ->columns(1),
                Forms\Components\Select::make('navigation_id')
                    ->relationship('navigation', 'name')
                    ->required(),
                Forms\Components\Select::make('page_id')
                    ->relationship('page', 'name')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('url')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('position')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('navigation.name')->sortable()->searchable(),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
