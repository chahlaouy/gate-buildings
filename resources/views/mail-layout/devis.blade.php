<h1>Email de la part: {{$name}}</h1>
<h3>Sujet: Demande de devis</h3>
<ul>
    <li>
        Catégorie: {{$categorie}}
    </li>
    <li>
        Nom: {{$name}}
    </li>
    <li>
        phone: {{$phone}}
    </li>
</ul>
<h1>Adresse de prise en charge</h1>
<ul>
    <li>
        Rue: {{$rue}}
    </li>
    <li>
        Ville: {{$ville}}
    </li>
    <li>
        zip: {{$zip}}
    </li>
    <li>

        Type de 1er logement: {{$radioGroup1}}
    </li>
    <li>

        Ascenseur 1er logement: {{$radioGroup2}}
    </li>
    <li>

        Numéro etage 1er logement: {{$etage_1}}
    </li>
</ul>
<h1>Adresse de livraison</h1>
<ul>
    <li>

        Rue: {{$rue1}}
    </li>
    <li>
        Ville: {{$ville1}}
    </li>
    <li>
        zip: {{$zip1}}
    </li>
    <li>

        Type de 2ème logement: {{$radioGroup3}}
    </li>
    <li>

        Ascenseur 2ème logement: {{$radioGroup4}}
    </li>
    <li>

        Numéro etage 2eme logement: {{$etage_2}}
    </li>
    <li>

        Démontage: {{$radioGroup5}}
    </li>
    <li>

        Aide pour la manutention: {{$radioGroup6}}
    </li>
    <li>

        Commentaire: {{$type}}
    </li>
</ul>
