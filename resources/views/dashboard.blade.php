<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Message de bienvenue -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 border-l-8 border-formatec-blue">
                <div class="p-6 text-formatec-dark">
                    <h2 class="text-3xl font-bold text-formatec-blue mb-2">
                        Bienvenue, {{ Auth::user()->prenom }} {{ Auth::user()->nom }} ! 👋
                    </h2>
                    <p class="text-gray-600">
                        Vous êtes connecté en tant que 
                        <span class="font-bold text-formatec-red uppercase bg-yellow-100 px-2 py-1 rounded">
                            {{ Auth::user()->role }}
                        </span>
                        sur la plateforme de gestion des soutenances de l'Institut FORMATEC.
                    </p>
                </div>
            </div>

            <!-- Cartes d'accès rapide (Dashboard) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Carte 1 : Soutenances -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-t-4 border-formatec-yellow hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-formatec-blue">Mes Soutenances</h3>
                            <svg class="w-8 h-8 text-formatec-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                        </div>
                        <p class="text-gray-600 mb-4">Consultez le planning, déposez votre mémoire ou suivez vos étudiants.</p>
                        <a href="#" class="text-formatec-blue font-semibold hover:text-formatec-red transition-colors">Accéder &rarr;</a>
                    </div>
                </div>

                <!-- Carte 2 : Planning -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-t-4 border-formatec-red hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-formatec-blue">Planning Global</h3>
                            <svg class="w-8 h-8 text-formatec-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <p class="text-gray-600 mb-4">Visualisez les dates, les salles et les créneaux horaires des soutenances.</p>
                        <a href="#" class="text-formatec-blue font-semibold hover:text-formatec-red transition-colors">Voir le planning &rarr;</a>
                    </div>
                </div>

                <!-- Carte 3 : Profil / Notes -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-t-4 border-formatec-blue hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-formatec-blue">Mon Profil</h3>
                            <svg class="w-8 h-8 text-formatec-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <p class="text-gray-600 mb-4">Gérez vos informations personnelles, votre matricule et vos spécialités.</p>
                        <a href="{{ route('profile.edit') }}" class="text-formatec-blue font-semibold hover:text-formatec-red transition-colors">Gérer mon profil &rarr;</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>