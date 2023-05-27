<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    protected static ?string $navigationGroup = 'Article';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->relationship('user','name')
                            ->label('Author')
                            ->required(),
                        Forms\Components\Select::make('tags_id')
                            ->relationship('tags','title_tags')
                            ->label('Tags')
                            ->required(),
                        Forms\Components\TextInput::make('title_article')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique()
                            ->maxLength(255)
                            ->placeholder('Note : Slug harus huruf kecil dan tanpa spasi, ganti spasi dengan tanda strip (-)'),
                        Forms\Components\FileUpload::make('image_article')
                            ->required(),
                        Forms\Components\Textarea::make('description_article')
                            ->required()
                            ->maxLength(65535),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                ->label('Author'),
                Tables\Columns\TextColumn::make('tags.title_tags')
                ->label('Tags'),
                Tables\Columns\TextColumn::make('title_article'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\ImageColumn::make('image_article'),
                Tables\Columns\TextColumn::make('description_article'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat pada')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
