<?php

namespace App\Filament\Editor\Resources; 

use App\Filament\Editor\Resources\NewsResource\Pages;
use App\Models\News; 
use App\Models\NewsCategory;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Str;

class NewsResource extends Resource
{
    protected static ?string $model = News::class; 

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('news_category_id', Auth::user()->news_category_id);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('author_name') 
                    ->label('Nama Penulis')
                    ->default(auth()->user()->name)
                    ->disabled()
                    ->dehydrated(false),
                Forms\Components\TextInput::make('category_name') 
                    ->label('Kategori Berita')
                    ->default(function () {
                        
                        $category = NewsCategory::find(auth()->user()->news_category_id);
                        return $category ? $category->title : 'Tidak ada kategori';
                    })
                    ->disabled()
                    ->dehydrated(false),
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (?string $state, callable $set) => $set('slug', Str::slug($state))),
                Forms\Components\Textarea::make('slug')
                    ->label('Slug(auto isi)')
                    ->readonly(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->label('Gambar')
                    ->image()
                    ->required()
                    ->columnSpanfull(),
                Forms\Components\RichEditor::make('content')
                    ->label('Isi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('author.name')->label('Author'),
                Tables\Columns\TextColumn::make('title')->label('title'),
                Tables\Columns\ImageColumn::make('thumbnail')->label('Thumbnail'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Created At'),
            ])
            ->filters([
                
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(), 
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}