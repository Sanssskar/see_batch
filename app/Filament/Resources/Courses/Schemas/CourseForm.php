<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Add Course')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('title')
                        ->columnSpanFull()
                            ->required(),
                            TextInput::make('price')
                                ->required(),
                            DatePicker::make('date')
                                ->required(),
                        Textarea::make('description')
                            ->required()
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
