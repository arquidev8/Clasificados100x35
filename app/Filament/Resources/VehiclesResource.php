<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Vehicles;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Http\Request;
use Filament\Resources\Resource;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\VehiclesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\VehiclesResource\RelationManagers;

class VehiclesResource extends Resource
{
    protected static ?string $model = Vehicles::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->options(function () {
                        // Obtén el ID del usuario autenticado
                        $userId = auth()->id();

                        // Devuelve un array con el ID del usuario como opción
                        return [$userId => $userId];
                    })
                    ->default(auth()->id()) // Establece el valor predeterminado como el ID del usuario autenticado
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(191),
                Forms\Components\Select::make('province')
                    ->options([
                        'Adjuntas' => 'Adjuntas',
                        'Aguada' => 'Aguada',
                        'Aguadilla' => 'Aguadilla',
                        'Aguas Buenas' => 'Aguas Buenas',
                        'Aibonito' => 'Aibonito',
                        'Añasco' => 'Añasco',
                        'Arecibo' => 'Arecibo',
                        'Arroyo' => 'Arroyo',
                        'Barceloneta' => 'Barceloneta',
                        'Barranquitas' => 'Barranquitas',
                        'Bayamón' => 'Bayamón',
                        'Cabo Rojo' => 'Cabo Rojo',
                        'Caguas' => 'Caguas',
                        'Camuy' => 'Camuy',
                        'Canóvanas' => 'Canóvanas',
                        'Carolina' => 'Carolina',
                        'Cataño' => 'Cataño',
                        'Cayey' => 'Cayey',
                        'Ceiba' => 'Ceiba',
                        'Ciales' => 'Ciales',
                        'Cidra' => 'Cidra',
                        'Coamo' => 'Coamo',
                        'Comerío' => 'Comerío',
                        'Corozal' => 'Corozal',
                        'Culebra' => 'Culebra',
                        'Dorado' => 'Dorado',
                        'Fajardo' => 'Fajardo',
                        'Florida' => 'Florida',
                        'Guánica' => 'Guánica',
                        'Guayama' => 'Guayama',
                        'Guayanilla' => 'Guayanilla',
                        'Guaynabo' => 'Guaynabo',
                        'Gurabo' => 'Gurabo',
                        'Hatillo' => 'Hatillo',
                        'Hormigueros' => 'Hormigueros',
                        'Humacao' => 'Humacao',
                        'Isabela' => 'Isabela',
                        'Jayuya' => 'Jayuya',
                        'Juana Díaz' => 'Juana Díaz',
                        'Juncos' => 'Juncos',
                        'Lajas' => 'Lajas',
                        'Lares' => 'Lares',
                        'Loíza' => 'Loíza',
                        'Luquillo' => 'Luquillo',
                        'Manatí' => 'Manatí',
                        'Las Marías' => 'Las Marías',
                        'Maricao' => 'Maricao',
                        'Maunabo' => 'Maunabo',
                        'Mayagüez' => 'Mayagüez',
                        'Moca' => 'Moca',
                        'Morovis' => 'Morovis',
                        'Naguabo' => 'Naguabo',
                        'Naranjito' => 'Naranjito',
                        'Orocovis' => 'Orocovis',
                        'Patillas' => 'Patillas',
                        'Peñuelas' => 'Peñuelas',
                        'Las Piedras' => 'Las Piedras',
                        'Ponce' => 'Ponce',
                        'Quebradillas' => 'Quebradillas',
                        'Rincón' => 'Rincón',
                        'Río Grande' => 'Río Grande',
                        'Sabana Grande' => 'Sabana Grande',
                        'Salinas' => 'Salinas',
                        'San Germán' => 'San Germán',
                        'San Juan' => 'San Juan',
                        'San Lorenzo' => 'San Lorenzo',
                        'San Sebastián' => 'San Sebastián',
                        'Santa Isabel' => 'Santa Isabel',
                        'Toa Alta' => 'Toa Alta',
                        'Toa Baja' => 'Toa Baja',
                        'Trujillo Alto' => 'Trujillo Alto',
                        'Utuado' => 'Utuado',
                        'Vega Alta' => 'Vega Alta',
                        'Vega Baja' => 'Vega Baja',
                        'Vieques' => 'Vieques',
                        'Villalba' => 'Villalba',
                        'Yabucoa' => 'Yabucoa',
                        'Yauco' => 'Yauco',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('stock')
                ->numeric()
                ->required(),
                Forms\Components\TextInput::make('seller_type')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('registered_city')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('engine_capacity')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('body_type')
                    ->required()
                    ->maxLength(191),
                Forms\Components\Select::make('condition')
                    ->options([
                        'New' => 'New',
                        'Used' => 'Used'
                        ])
                    ->required(),
                Forms\Components\TextInput::make('model_year')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('exterior_color')
                    ->required()
                    ->maxLength(191),
                Forms\Components\CheckboxList::make('car_features')
                    ->required()
                    ->options([
                        'ABS' => 'ABS',
                        'AM/FM Radio' => 'AM/FM Radio',
                        'Air Bags' => 'Air Bags',
                        'Air Conditioning' => 'Air Conditioning',
                        'Alloy Rims' => 'Alloy Rims',
                        'CD Player' => 'CD Player',
                        'Immobilizer Key' => 'Immobilizer Key',
                        'Keyless Entry' => 'Keyless Entry',
                        'Power Locks' => 'Power Locks',
                        'Power Mirrors' => 'Power Mirrors',
                        'Power Steering' => 'Power Steering',
                        'Power Windows' => 'Power Windows',
                        'Rear AC Vents' => 'Rear AC Vents',
                        'Rear speakers' => 'Rear speakers',
                        'Sun Roof' => 'Sun Roof',
                        'USB and Auxillary Cable' => 'USB and Auxillary Cable',
                    ])
                    ->columns(3)
                    ->gridDirection('row')
                    ->bulkToggleable(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('website')
                    ->maxLength(191),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(191)
                    ->required(),          
                Forms\Components\FileUpload::make('images')
                  
                    ->required()
                    ->multiple(),
                Forms\Components\FileUpload::make('video')
                    ->label('Video')
                    ->acceptedFileTypes(['video/mp4','video/ogg','video/webm'])
                    ->maxSize(1000000)
                    // ->visibility('private')
                    ->afterStateUpdated(fn (callable $set, $state) => $set('mime', $state?->getMimeType())),                    
            ]);
    }


    // public function store(Request $request)
    // {
    //     $data = $this->validate($request, [
    //         // Definición de las reglas de validación
    //         // ...
    //     ]);
   
    //     // Maneja las imágenes antes de almacenarlas
    //     $images = $request->file('images');
    
    //     if ($images) {
    //         // Si estás almacenando las imágenes directamente en la base de datos,
    //         // puedes convertirlas en un array de nombres de archivo y almacenar ese array en lugar de JSON
    //         $imagePaths = [];
    
    //         foreach ($images as $image) {
    //             $imagePaths[] = $image->store('images', 'public');
    //         }
    
    //         $data['images'] = $imagePaths;
    //     }
    
    //     // Maneja las características de la propiedad (car_features)
    //     $carFeatures = $request->input('car_features', []);
    //     $data['car_features'] = json_encode($carFeatures);
    
    //     // Crea una nueva instancia del modelo y guarda los datos
    //     Vehicles::create($data);
    
    //     // Redirige a donde desees después de la creación exitosa
    //     return $this->getResource()::getUrl('index');
    // }

    public function store(Request $request)
    {
        try {
            // Obtén el ID del usuario autenticado
            $userId = auth()->id();

            // Recoge todos los datos del formulario y agrega el user_id
            $data = $request->all();
            $data['user_id'] = $userId;

            // Validación de datos
            $validatedData = $this->validate($request, [
                'user_id' => 'required|integer',
                // otras reglas de validación...
            ], $data);

            // Maneja las imágenes antes de almacenarlas
            $images = $request->file('images');

            if ($images) {
                // Si estás almacenando las imágenes directamente en la base de datos,
                // puedes convertirlas en un array de nombres de archivo y almacenar ese array en lugar de JSON
                $imagePaths = [];

                foreach ($images as $image) {
                    $imagePaths[] = $image->store('images', 'public');
                }

                $validatedData['images'] = $imagePaths;
            }

            // Crea una nueva instancia del modelo y guarda los datos
            Vehicles::create($validatedData);

            // Redirige a donde desees después de la creación exitosa
            return $this->getResource()::getUrl('index');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // manejar el error de validación
            return redirect()->back()
                            ->withErrors($e->getMessage())
                            ->withInput();
        }
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('seller_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('registered_city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('engine_capacity')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('body_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('condition')
                    ->searchable(),
                Tables\Columns\TextColumn::make('model_year')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('exterior_color')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video')
                    ->searchable(),
                Tables\Columns\TextColumn::make('province')
                    ->searchable(),
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
                SelectFilter::make('user_id')
                ->label('Usuario')
                ->query(fn (Builder $query): Builder => $query->where('user_id', auth()->id())),
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
            'index' => Pages\ListVehicles::route('/'),
            'create' => Pages\CreateVehicles::route('/create'),
            'edit' => Pages\EditVehicles::route('/{record}/edit'),
        ];
    }
}
