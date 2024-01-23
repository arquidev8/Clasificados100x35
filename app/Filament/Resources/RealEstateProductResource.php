<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Http\Request;
use Filament\Resources\Resource;
use App\Models\RealEstateProduct;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RealEstateProductResource\Pages;
use App\Filament\Resources\RealEstateProductResource\RelationManagers;

class RealEstateProductResource extends Resource
{
   protected static ?string $model = RealEstateProduct::class;

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
                     
                     ->required(),
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
               Forms\Components\TextInput::make('bathrooms')
                     ->numeric()
                     ->required(),
               Forms\Components\TextInput::make('bedrooms')
               ->numeric()
               ->required(),
               Forms\Components\Select::make('property_type')
                    ->options([
                        'House' => 'House',
                        'Villa' => 'Villa',
                        'Land' => 'Land',
                        'Apartment' => 'Apartment',
                        'Garage' => 'Garage',
                        'Industrial' => 'Industrial',
                        'Single-family Home' => 'Single-family Home',
                        'Multifamily Home' => 'Multifamily Home',
                        'Townhouse' => 'Townhouse',
                        'Rural Home' => 'Rural Home',
                        'Urban Home' => 'Urban Home',
                    ])
                    ->required(),
               Forms\Components\TextInput::make('stock')
               ->numeric()
               ->required(),
         
               Forms\Components\TextInput::make('property_size')
                    ->numeric()
                    ->required()
                    ->prefix('Sq Ft'),
               Forms\Components\TextInput::make('garage_size')
                    ->nullable()
                    ->numeric()
                    ->required()
                    ->prefix('Sq Ft'),
               
               Forms\Components\TextInput::make('year_built')
                    ->numeric()
                    ->required(),
               Forms\Components\TextInput::make('seller_type')
                    ->required(),
               Forms\Components\Select::make('condition')
                    ->options([
                                
                        'Owner-occupied' => 'Owner-occupied',
                        'Luxury Home' => 'Luxury Home',
                        'Low-Cost or Social Housing' => 'Low-Cost or Social Housing',
                        'Dilapidated Home' => 'Dilapidated Home',
                        'Sustainable or Eco-friendly Home' => 'Sustainable or Eco-friendly Home',
                        'Under Construction' => 'Under Construction',
                    ])
               ,
               Forms\Components\Select::make('purpose')
                    ->options([
                        'Sell' => 'Sell',
                        'Rent' => 'Rent',
                     
                    ])
                    ->required(),
               Forms\Components\TextInput::make('land_area')
                    ->numeric()
                    ->required()
                    ->prefix('Sq Ft'),
               Forms\Components\CheckboxList::make('property_features')
                    ->options([
                        'Wifi' => 'Wifi',
                        'Garage' => 'Garage',
                        'Parking' => 'Parking',
                        'Water:public' => 'Water:public',
                        'Garden' => 'Garden',
                        'Satellite TV' => 'Satellite TV',
                        'Home Office Space' => 'Home Office Space',
                        'Laundry Facilities' => 'Laundry Facilities',
                        'Home Automation' => 'Home Automation',
                        
                    ])
                    ->columns(3)
                    ->gridDirection('row')
                    ->bulkToggleable(),
               // Forms\Components\Checkbox::make('garage')
               // ->required(),
               Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
               Forms\Components\TextInput::make('price')
                  ->required()
                  ->numeric()
                  ->prefix('$'),

               Forms\Components\TextInput::make('phone')
                 ->required()
                 ->tel(),
           
               
               Forms\Components\TextInput::make('website')
                 ->nullable(),
               Forms\Components\TextInput::make('email')
                 ->email()
                 ->required(),

               
               Forms\Components\FileUpload::make('images')
                  
                  ->required()
                  ->multiple(),
               Forms\Components\FileUpload::make('video')
                  ->label('Video')
                  ->acceptedFileTypes(['video/mp4','video/ogg','video/webm'])
                  ->maxSize(1000000)
                  // ->visibility('private')
                  ->afterStateUpdated(fn (callable $set, $state) => $set('mime', $state?->getMimeType()))
           
               
            
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
   
   //     // Maneja las características de la propiedad (property_features)
   //     $propertyFeatures = $request->input('property_features', []);
   //     $data['property_features'] = json_encode($propertyFeatures);
   
   //     // Crea una nueva instancia del modelo y guarda los datos
   //     RealEstateProduct::create($data);
   
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
           RealEstateProduct::create($validatedData);

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
                  ->label('Titulo'),
               Tables\Columns\TextColumn::make('bathrooms')
                  ->label('Baños'),
               Tables\Columns\TextColumn::make('property_type')
                  ->label('Tipo de Propiedad'),
               Tables\Columns\TextColumn::make('garage')
                  ->label('Garaje'),
               Tables\Columns\TextColumn::make('property_size')
                  ->label('Tamaño de la Propiedad'),
               Tables\Columns\TextColumn::make('garage_size')
                  ->label('Tamaño del Garaje'),
               Tables\Columns\TextColumn::make('bedrooms')
                  ->label('Dormitorios'),
               Tables\Columns\TextColumn::make('year_built')
                  ->label('Año de Construcción'),
               Tables\Columns\TextColumn::make('seller_type')
                  ->label('Tipo de Vendedor'),
               Tables\Columns\TextColumn::make('condition')
                  ->label('Condición'),
               Tables\Columns\TextColumn::make('purpose')
                  ->label('Propósito'),
               Tables\Columns\TextColumn::make('land_area')
                  ->label('Área de Terreno'),
               Tables\Columns\TextColumn::make('property_features')
                  ->label('Características de la Propiedad'),
           
               Tables\Columns\TextColumn::make('description')
                  ->label('Descripción'),
               Tables\Columns\TextColumn::make('price')
                  ->label('Precio')
                  ->money(),
               Tables\Columns\TextColumn::make('images')
                  ->label('Imagenes'),
               Tables\Columns\TextColumn::make('phone')
                  ->label('Teléfono'),
               Tables\Columns\TextColumn::make('website')
                  ->label('Sitio Web'),
               Tables\Columns\TextColumn::make('email')
                  ->label('Correo Electrónico'),
               Tables\Columns\TextColumn::make('video')
                  ->label('Video'),
               Tables\Columns\TextColumn::make('province')
                  ->label('Provincia'),
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
            'index' => Pages\ListRealEstateProducts::route('/'),
            'create' => Pages\CreateRealEstateProduct::route('/create'),
            'edit' => Pages\EditRealEstateProduct::route('/{record}/edit'),
        ];
    }
}
