<?php

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
        $this->call(DependencesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(PermissionUserTableSeeder::class);
        $this->call(MentalHealthsTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(PhoneTypesTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(RelationshipsTableSeeder::class);
        $this->call(DisabilitiesTableSeeder::class);
        $this->call(IdentificationTypesTableSeeder::class);
        $this->call(AddressStatesTableSeeder::class);
        $this->call(AddressCitiesTableSeeder::class);
        $this->call(PhysicalHealthsTableSeeder::class);
        $this->call(MaritalStatusesTableSeeder::class);
        $this->call(OccupationsTableSeeder::class);
        $this->call(ScholarshipsTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(BodyPartsTableSeeder::class);
        $this->call(SignalTypesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(ClothingTypesTableSeeder::class);
        $this->call(AccessoriesTableSeeder::class);
        $this->call(AgeRangesTableSeeder::class);
        $this->call(HeightsTableSeeder::class);
        $this->call(AgesTableSeeder::class);
        $this->call(VitalSignsTableSeeder::class);
        $this->call(PrioritiesTableSeeder::class);
        $this->call(CircumstancesTableSeeder::class);
        $this->call(TypeRegistersTableSeeder::class);
    }
}
