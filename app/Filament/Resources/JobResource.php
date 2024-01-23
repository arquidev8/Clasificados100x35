<?php

namespace App\Filament\Resources;

use App\Models\Job;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Http\Request;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\JobResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JobResource\RelationManagers;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

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
                    
                Forms\Components\TextInput::make('company_name')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(191),
                Forms\Components\Textarea::make('job_description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Select::make('employment_sector')
                ->options([
                    'Food' => 'Food',
                    'Construction' => 'Construction',
                    'Finance' => 'Finance',
                    'Engineers' => 'Engineers',
                    'Health' => 'Health',
                    'Lawyers' => 'Lawyers',
                    'Education' => 'Education',
                    'Technology' => 'Technology',
                    'Beauty' => 'Beauty',
                    'General' => 'General',
                    'others' => 'others',
                  
                ])
                ->required(),
                Forms\Components\Select::make('employment_type')
                    ->options([
                        'Full-Time' => 'Full-Time',
                        'Part-Time' => 'Part-Time',
                        'Contract' => 'Contract'
                
                    ])
                    ->required(),
                    
                Forms\Components\TextInput::make('price')
                    ->numeric(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(191)
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(191),
                Forms\Components\TextInput::make('website')
                    ->maxLength(191),
                Forms\Components\Textarea::make('application_instructions')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('job_requirements')
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

//     public function store(Request $request)
// {
//     if (!Auth::check()) {
//         // El usuario no está autenticado
//         return redirect()->route('admin/login');
//     }

//     $this->validate($request, [
//         // Definición de las reglas de validación
//         // ...
//     ]);
   

//     // Usar el método create proporcionado por Filament
//     $this->getModel()::create([
//         'user_id' => auth()->id(),
//         'title' => $request->input('title'),
//         'province' => $request->input('province'),
//         'company_name' => $request->input('company_name'),
//         'location' => $request->input('location'),
//         'job_description' => $request->input('job_description'),
//         'employment_sector' => $request->input('employment_sector'),
//         'employment_type' => $request->input('employment_type'),
//         'salary' => $request->input('salary'),
//         'email' => $request->input('email'),
//         'phone' => $request->input('phone'),
//         'website' => $request->input('website'),
//         'application_instructions' => $request->input('application_instructions'),
//         'job_requirements' => $request->input('job_requirements'),
//         'images' => $this->handleImages($request->file('images')),
//     ]);

//     return $this->redirect('index');
// }

// protected function handleImages($images)
// {
//     if (!$images) {
//         return [];
//     }

//     // Si estás almacenando las imágenes directamente en la base de datos,
//     // puedes convertirlas en un array de nombres de archivo y almacenar ese array en lugar de JSON
//     $imagePaths = [];

//     foreach ($images as $image) {
//         $imagePaths[] = $image->store('images', 'public');
//     }

//     return $imagePaths;
// }


    // public function store(Request $request)
    // {

    //     if (!Auth::check()) {
    //         // El usuario no está autenticado
    //         return redirect()->route('admin/login');
    //     }
    
    //     $data = $this->validate($request, [
    //         // Definición de las reglas de validación
    //         // ...
    //     ]);

    //     // Agrega el user_id al data
    //     $data['user_id'] = auth()->id();
   
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

    //     // Crea una nueva instancia del modelo y guarda los datos
    //     Job::create($data);
    //     dd($data);
    //     // Redirige a donde desees después de la creación exitosa
    //     return $this->getResource()::getUrl('index');
    // }


    // public function store(Request $request)
    // {
    //     if (!Auth::check()) {
    //         // El usuario no está autenticado
    //         return redirect()->route('admin/login');
    //     }

    //     // Obtén el ID del usuario autenticado
    //     $userId = auth()->id();

    //     // Validación de datos
    //     $data = $this->validate($request, [
    //         // Definición de las reglas de validación
    //         'user_id' => 'required|integer',
    //     ]);

    //     // Agrega el user_id al data
    //     $data['user_id'] = $userId;

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

    //     // Crea una nueva instancia del modelo y guarda los datos
    //     Job::create($data);

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
            Job::create($validatedData);

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
                Tables\Columns\TextColumn::make('company_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('employment_sector')
                    ->searchable(),
                Tables\Columns\TextColumn::make('employment_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('salary')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website')
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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }
}
