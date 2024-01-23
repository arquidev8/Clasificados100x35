<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Service;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Http\Request;
use Filament\Resources\Resource;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ServiceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServiceResource\RelationManagers;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

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
            
        Forms\Components\Select::make('service_type')
        ->options([
            'Job Posting Services' => 'Job Posting Services',
            'Home Cleaning Services' => 'Home Cleaning Services',
            'Recruitment Services' => 'Recruitment Services',
            'Lawn Maintenance Services' => 'Lawn Maintenance Services',
            'Business Listing Services' => 'Business Listing Services',
            'Pet Sitting Services' => 'Pet Sitting Services',
            'Local Services Directory' => 'Local Services Directory',
            'Personal Fitness Training' => 'Personal Fitness Training',
            'E-commerce Services' => 'E-commerce Services',
            'Interior Design Services' => 'Interior Design Services',
            'Real Estate Listings' => 'Real Estate Listings',
            'Babysitting Services' => 'Babysitting Services',
            'Freelance Graphic Design' => 'Freelance Graphic Design',
            'Event Planning Services' => 'Event Planning Services',
            'Mobile App Development' => 'Mobile App Development',
            'Plumbing Services' => 'Plumbing Services',
            'Networking Events' => 'Networking Events',
            'Handyman Services' => 'Handyman Services',
            'Advertisement Services' => 'Advertisement Services',
            'Home Renovation Services' => 'Home Renovation Services'   
        ])
             ->required(),          
        Forms\Components\TextInput::make('stock')
            ->numeric()
            ->required(),
        Forms\Components\TextInput::make('price')
            ->required()
            ->numeric()
            ->prefix('$'),
     
        Forms\Components\TextInput::make('email')
            ->email()
            ->maxLength(191)
            ->required(),
        Forms\Components\TextInput::make('phone')
            ->tel()
            ->maxLength(191)
            ->required(),  
        Forms\Components\TextInput::make('website')
            ->maxLength(191),
        Forms\Components\Textarea::make('description')
            ->required()
            ->maxLength(65535)
            ->columnSpanFull(),
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


    // // public function store(Request $request)
    // // {
    // //     $data = $this->validate($request, [
    // //         // Definición de las reglas de validación
    // //         // ...
    // //     ]);
   
    // //     // Maneja las imágenes antes de almacenarlas
    // //     $images = $request->file('images');
    
    // //     if ($images) {
    // //         // Si estás almacenando las imágenes directamente en la base de datos,
    // //         // puedes convertirlas en un array de nombres de archivo y almacenar ese array en lugar de JSON
    // //         $imagePaths = [];
    
    // //         foreach ($images as $image) {
    // //             $imagePaths[] = $image->store('images', 'public');
    // //         }
    
    // //         $data['images'] = $imagePaths;
    // //     }

    // //     // Crea una nueva instancia del modelo y guarda los datos
    // //     Service::create($data);
    
    // //     // Redirige a donde desees después de la creación exitosa
    // //     return $this->getResource()::getUrl('index');
    // // }

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
            Service::create($validatedData);

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
            Tables\Columns\TextColumn::make('province')
                ->searchable(),
            Tables\Columns\TextColumn::make('service_type')
                ->searchable(),
            Tables\Columns\TextColumn::make('description')
                ->searchable(),
            Tables\Columns\TextColumn::make('stock')
                ->searchable(),
            Tables\Columns\TextColumn::make('email')
                ->searchable(),
            Tables\Columns\TextColumn::make('phone')
                ->searchable(),
            Tables\Columns\TextColumn::make('website')
                ->searchable(),
            Tables\Columns\TextColumn::make('images')
                ->searchable(),
            Tables\Columns\TextColumn::make('video')
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
