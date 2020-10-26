<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            # Vou deixar comentando de quem fez a parte 4 
            # para não quebrar a migration de quem ainda no replicado
            #UserSeeder::class,
            #LivroSeeder::class,
            #LivroRicardoSeeder::class,
            #LivroSaotomeSeeder::class,
            #LivroVictorSeeder::class,
            #LivroMarisaSeeder::class,
            #LivroLauSeeder::class,
            #LivroGabrielaSeeder::class,
            LivroMicheletSeeder::class,
            LivroLeonardoSeeder::class,
            LivroMarisaSeeder::class,
            LivroCelsoSeeder::class,
            LivroFabioFDRPSeeder::class,
			LivroAndreSeeder::class,
            LivromasakikSeeder::class,
            LivroMarceloDaudtSeeder::class,
            LivroLFloroSeeder::class,
            LivroEbonilhaSeeder::class,
            LivroFernandoSeeder::class,
            LivroWillSeeder::class,
            LivroAlessandroOliveiraSeeder::class,
            LivroDenisSeeder::class,
            LivroGroffSeeder::class,
            LivroAlessandroOliveiraSeeder::class,
            LivroTapiaSeeder::class
        ]);
    }
}
