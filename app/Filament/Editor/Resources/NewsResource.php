<?php

namespace App\Filament\Editor\Resources; 

use App\Filament\Editor\Resources\NewsResource\Pages;
use App\Models\News; 
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
                // Field Author bisa kita kunci juga, agar otomatis terisi nama editor yg login
                Forms\Components\Select::make('author_id')
                    ->label('Nama Penulis')
                    ->relationship('author', 'name')
                    ->default(auth()->id()) // <-- Otomatis pilih user yg login
                    ->disabled() // <-- Kunci field ini
                    ->required()
                    ->dehydrated(),
                
                // Field Kategori Berita kita kunci sesuai kategori editor
                Forms\Components\Select::make('news_category_id')
                    ->label('Kategori Berita')
                    ->relationship('newscategory', 'title')
                    ->default(Auth::user()->news_category_id) // <-- Otomatis pilih kategori user
                    ->disabled() // <-- Kunci field ini
                    ->required()
                    ->dehydrated(),

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

    // 4. MODIFIKASI BAGIAN TABLE
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolomnya bisa sama atau disederhanakan
                Tables\Columns\TextColumn::make('author.name')->label('Author'),
                Tables\Columns\TextColumn::make('title')->label('title'),
                Tables\Columns\ImageColumn::make('thumbnail')->label('Thumbnail'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Created At'),
            ])
            ->filters([
                // Filter berdasarkan kategori tidak lagi relevan di sini karena data sudah terfilter otomatis
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(), // <-- Hapus atau beri komentar pada Aksi Delete
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(), // <-- Hapus atau beri komentar pada Bulk Delete
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