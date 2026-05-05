   <div class="container mx-auto mt-10 px-4">

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
            <div class="p-6 border-b">
                <h2 class="text-2xl font-bold text-gray-700">
                    Liste des classes
                </h2>
                
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-600">
                    <thead class="bg-gray-200 text-gray-700 uppercase text-xs">
                        <tr>
                            <th class="px-6 py-3">Libelle</th>
                            <th class="px-6 py-3">Niveau</th>
                            <th class="px-6 py-3">Filiere</th>
                           
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php foreach ($classes as $value): ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-medium"><?= $value["libelle"] ?></td>
                            <td class="px-6 py-4"><?= $value["niveau_id"] ?></td>
                            <td class="px-6 py-4"><?= $value["filiere_id"] ?></td>
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
