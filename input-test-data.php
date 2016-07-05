<?php

// $json_input = <<<STR
// {
// 	"product_name" : [ "British plain flour",
// 	"Balsamic vinegar of Modena"]
// }
// STR;

$json_input = <<<STR
{
"product_name" : [  "Organic Rotini",
    "Couscous Tipiak",
    "Young Corn",
    "Black Beans",
    "Oven-Ready Lasagna",
    "Salad Onion",
    "European Style Organic Plain Nonfat Yogurt",
    "Organic diced tomatoes",
    "Organic Low sodium Vegetable Broth",
    "Processed peas in water with sugar and salt",
    "Dwarf beans",
    "Desiree potatoes",
    "limes ",
    "mixed chillies",
    "Courgettes",
    "Sliced carrrots in water",
    "Lemon Juice",
    "chopped tomatoes in tomato juice",
    "Sainsbury's Peas, SO Organic ",
    "semi-skimmed less than 2% fat",
    "1% fat British milk",
    "sweetcorn in water sugar & salt added",
    "Scottish raspberries",
    "Cornflour",
    "1 Bifteck",
    "2 pavés ***",
    "Tomatoes",
    "Peppery babyleaf rocket salad",
    "3 Pack Mixed Peppers",
    "Mixed vegetables ",
    "Peppery watercress, spinash & rocket salad",
    "Mediterranean roasting vegetables ",
    "Tesco British maris piper potatoes",
    "Lasagne",
    "Diet Coke",
    "Orange Blossom Water",
    "Rose Water",
    "Seva Eau d'érable",
    "Wholemeal pittas enriched with extra virgin olive oil",
    "Organic lemon tea",
    "Organic Raw Kombucha Original",
    "Perrier",
    "Stevia",
    "Lasagne",
    "Pasta-Älgar ",
    "Cherry tomatoes",
    "Limes",
    "Organic tenderleaf salad",
    "Simple mixed leaf salad",
    "Simple mixed leaf salad",
    "Organic brown rice & quinoa fusilli pasta",
    "Farine de blé",
    "Mesclun (5/6 portions)",
    "Yaourts nature",
    "Les Crozets, Génépi",
    "Ebly, le blé gourmand",
    "Fécule de maïs",
    "Capellini n.1",
    "Infusión de hierbas en bolsitas",
    "Lait demi-écrémé (1,2 % MG)",
    "Matin léger, Facile à Digérer (1,2 % MG)",
    "Lait stérilisé UHT demi-écrémé ",
    "P'tites tomates",
    "Moyen Coca Cola Light",
    "Hinojo en bolsitas",
    "Pâté Lorrain (Voir 26024684)",
    "Chopped Tomato Carla",
    "Macaroni (Pâtes alimentaires de qualité supérieure)",
    "Coquillettes (Pâtes alimentaires de qualité supérieure)",
    "Sainsbury's Macaroni 1kg",
    "Les Supérieures",
    "Carla Diced Chopped Tomatoes",
    "Carla Chopped Tomatoes ",
    "Farfalle complètes ",
    "riz thai",
    "Lait demi-écrémé",
    "Coquillettes complètes",
    "Jeunes pousses",
    "Haltbare fettarme Milch",
    "Morning Time",
    "Bière blonde",
    "farine fluide",
    "Jeunes carottes",
    "Infusión de bayas de saúco",
    "Infusión de espino amarillo",
    "Yaourt nature issu de l'agriculture biologique",
    "Badoit citron vert",
    "Thai Jasmin Premium Langkorn Reis",
    "Filet de Colin dAlaska, Surgelé",
    "Speisequark Magerstufe",
    "Pfefferminztee",
    "Farine de blé Cuisine & Pâtisserie Type 45",
    "Spaghetti",
    "Fusilli",
    "Tomates pelées en morceaux",
    "Riz étuvé long grain",
    "Potatoes",
    "Woolworths Fresh Low Fat Milk",
    "Coquillettes",
    "Earl Grey",
    "Lait demi-écrémé (1,5% M.G)",
    "Jus de citron",
    "Arroz agulha",
    "Lait demi-écrémé",
    "Cola light",
    "Freeway cola",
    "Thai Jasmin",
    "Farfalle",
    "Penne Rigate",
    "Honey & Lemon Strong",
    "Euka Menthol Strong",
    "Cassis strong",
    "Lait écrémé",
    "Reine Buttermilch",
    "Lait demi-écrémé",
    "Macaroni",
    "Frische fettarme Milch",
    "Hähnchen-Minutenschnitzel",
    "Bio Fusille",
    "Filets de pangas, surgelés",
    "Spaghetti ",
    "Lapte de consum 2%",
    "Original italienische Vollkorn Farfalle",
    "Basmati Reis Traditionell",
    "Darjeeling Bio",
    "Italian style salad",
    "British speciality potatoes",
    "Deutsches Kartoffelpüree",
    "Darjeeling",
    "Rooibos Natur",
    "Menestra de verduras congelada &quot;Barnetti&quot;",
    "Jeunes carottes extra fines",
    "Carottes en rondelles",
    "Thé au citron",
    "Verveine orange",
    "Bio-Berglinsen braun",
    "Bio-Linsen rot",
    "Ensalada variada",
    "Bio Frische fettarme Milch",
    "Cannelloni",
    "Couscous",
    "Freeway Cola 0%",
    "Hörnli",
    "Fresh mixed peppers",
    "Canónigos",
    "Fenchel",
    "Purée",
    "Espinacas",
    "Easy Cook Long Grain Rice (XXL)",
    "Filets de Cabillaud portionnables",
    "Coles de Bruselas congeladas &quot;Barnetti&quot;",
    "Habas congeladas &quot;Barnetti&quot;",
    "Mezcla de setas congeladas &quot;Barnetti&quot;",
    "Lait demi-écrémé stérilisé UHT",
    "Thé Vert Nature",
    "Parboiled Reis",
    "Panaché de laitues",
    "Salade mélangée",
    "Puten-Minifilet",
    "Fresh flat leaf parsley ",
    "Émincé de poulet ",
    "Premium Kabeljaurückenfilets ohne Haut",
    "Spaghetti ",
    "Berry Chewing-gum sans sucres",
    "Greek style yoghurt",
    "Basmati sélection",
    "Yaourt Nature (12 pots)",
    "Rúcula",
    "Petits pois extra fins",
    "Carrots, Broccoli & Cauliflower",
    "Agrumes light",
    "Spaghetti Cuisson Rapide",
    "Glass noodles",
    "Yaourt nature maigre",
    "Mélange gourmand savoureux & coloré",
    "Coquillettes cuisson rapide",
    "Button Mushrooms in water",
    "Tagliatelles aux œufs frais",
    "Sushi rice",
    "Minze-Holunderblüte",
    "Riz long grain",
    "Filets de pangas",
    "Simply... Penne",
    "DRINK!! Morango 0%",
    "Fresh Salad trio mix",
    "Green tea Genmaicha",
    "Green tea sencha",
    "Vinagre de Cabernet Sauvignon",
    "Porcini mushrooms (boletos) &quot;Deluxe&quot;",
    "Chanterelle mushrooms (rebozuelos) &quot;Deluxe&quot;",
    "Oyster mushrooms (setas ostra) &quot;Deluxe&quot;",
    "Bio Langkorn Reis",
    "Laitue Iceberg",
    "Skyr Pfirsich-Maracuja",
    "Skyr Pur",
    "Skyr Erdbeere",
    "Skyr Himbeere",
    "Skyr Blaubeere",
    "Skyr Vanille",
    "Skyr Pur",
    "Fromage blanc 0% matière grasse",
    "Menthos pure fresh",
    "Reine Buttermilch",
    "Fettarme H-Milch",
    "frische fettarme Milch",
    "3 escalopes de Dinde ",
    "3 escalopes de Dinde",
    "3 filets de Poulet",
    "Sparkling Natural Mineral Water",
    "Farm Fresh Baby Peas",
    "Farm Fresh Garden Peas",
    "Corn Cobs Super Sweet",
    "Fizzi Diet Lemonade",
    "Penne Nudeln",
    "Weizenmehl Type 405",
    "Fettarme H-Milch",
    "Reine Buttermilch",
    "Nudeln aus reinem  Bio-Vollkornhartweizen",
    "Lentilles vertes",
    "14 days dry aged British T-Bone steak",
    "Soda mix concentré cola sans sucres",
    "Extra Trimmed Leeks",
    "Broccoli & Cauliflower Florets",
    "Large Vine Ripened Tomatoes",
    "Mixed Vegetable Selection",
    "Cod Fillets",
    "British Chicken Breast Fillets",
    "Infusión de arándanos rojos",
    "Pasta - Espaguetis ecológicos &quot;GutBio&quot;",
    "Infusión de rooibos aromatizada en bolsitas",
    "Infusión de frutas en bolsitas",
    "Infusión de jengibre",
    "Mezcla de setas congeladas &quot;El Cultivador&quot;",
    "Habas congeladas &quot;El Cultivador&quot;",
    "Brócoli troceado congelado &quot;El Cultivador&quot;",
    "Brotes de bambú en láminas",
    "Infusión de frutas Manzana y especias",
    "Puerros &quot;Talví&quot;",
    "red kidney beans",
    "Source Faustine saveur Citron-Citron Vert",
    "Farine de blé type 45",
    "Lait Demi écrémé Stérilisé UHT",
    "Lait Demi écrémé Stérilisé UHT",
    "Lait Demi-écrémé ",
    "Fusilli (Pâtes alimentaires de qualité supérieure)",
    "Spaghetti (Pâtes alimentaires de qualité supérieure)",
    "Riz long grain incollable",
    "Purée de Pommes de Terre en Flocons",
    "Couscous ",
    "Riz Thaï",
    "Riz Basmati ",
    "Penne Rigate (Pâtes alimentaires de qualité supérieure)",
    "Riz du Brésil",
    "Tomates entières pelées au jus",
    "Tagliatelles",
    "Lentilles vertes",
    "Fromage Blanc 0 %",
    "Panaché de laitues ",
    "Salade gourmande (3/4 personnes)",
    "Basa Fish Fillets Skinned and Boned",
    "Vegetable Medley Tub",
    "Chicken Tenderloin Skewers - Tomato, Pepper & Oregano",
    "Chick Peas",
    "Westcliffe Lemon Juice",
    "Aiguillettes de dinde",
    "Penne Rigate Integrale",
    "Prima Bio",
    "Rice noodles",
    "British Chicory",
    "Plain Flour",
    "Sweet Aromatico Tomatoes",
    "Coca-Cola zéro",
    "Frische fettarme Milch",
    "Speisequark Magerstufe 0,3% Fett",
    "Sémola de maíz",
    "Pimientos rojos &quot;VegaTajo&quot;",
    "Champignons de Paris",
    "Sweet Gum Fraise-Citron Vert",
    "2 Fresh parfum menthe verte / chlorophylle",
    "Hollywood chewing gum 2 fresh",
    "Chewing Gum parfum Cerise sans sucres Hollywood",
    "Cabillaud  - 4 tranches de filet",
    "Le Basmati du Penjab",
    "Taureau Ailé - Le Thaï",
    "Le Thaï du plateau de L'I-San",
    "Lentilles Vertes",
    "Actimel + (0 % MG) 10 Bouteilles + 2 Gratuites",
    "Taillefine Nature (0 % MG) Recette au Fromage Blanc",
    "Fromage blanc ",
    "Actimel + (0 % MG) x 6 Bouteilles",
    "Taillefine Plus Citron (0 % MG)",
    "Taillefine Plus Nature (0 % MG)",
    "P'tite Boisson Verveine Pommes",
    "P'tit souper tomates pâtes courgettes",
    "Mousline",
    "Mousline",
    "Mousline",
    "Etoiles (Les Pâtes à Potage)",
    "Les Pâtes à Potage, Alphabets ",
    "Les pâtes à compter !",
    "Cheveux d'Ange",
    "Vermicelles",
    "Coquillettes",
    "Macaroni ",
    "Macaroni (Offre Economique)",
    "Torti",
    "Penne Rigate",
    "Gansettes",
    "Penne Rigate (Format Eco)",
    "Spaghetti n°3",
    "Spaghetti (Offre Economique)",
    "Spaghetti (Lot de 5 paquets de 500 g + 1 Gratuit) ",
    "Risetti - Panzani",
    "Cheveux d'Ange (Maxi Format)",
    "Coquillettes (Maxi Format)",
    "Macaroni (Maxi Format)",
    "Macaroni (Maxi Format) Offre Economique",
    "Nouilles fines",
    "Torti (Maxi Format)",
    "Spaghetti ",
    "Spaghetti N°3",
    "Tagliatelle",
    "Coquillettes",
    "Torti",
    "Capellini",
    "Capellini N° 1",
    "Spaghetti Grosso",
    "Coquillettes (+ 20 % Gratuit)",
    "Cheveux d'Ange (+ 20% Gratuit)",
    "Torti (+ 20 % Gratuit)",
    "Fusillini (Al dente 6 min)",
    "Farfallini",
    "Serpentini",
    "Farfalle ",
    "Farfalle (Offre Economique)",
    "Fusilli",
    "Farfalle Format Eco ",
    "Les 3 Minutes, Serpentini",
    "Les 3 Minutes, Coquillettes",
    "Les 3 Minutes, Macaroni",
    "Les 3 Minutes, Torti",
    "Les 3 Minutes Spaghetti",
    "Les 3 Minutes, Farfalle",
    "Les 3 Minutes, Coquillettes (Format Eco)",
    "Les 3 Minutes, Torti (Format Eco)",
    "Semoule moyenne",
    "Graine de couscous moyenne",
    "Graine de couscous (Moyenne)",
    "Graine de Couscous Moyenne ",
    "Graine de couscous facile",
    "Tomacouli Bio",
    "Tomacouli nature",
    "Tomapulp nature",
    "La Lasagne authentique",
    "Lasagnes 10 minutes ",
    "Riz long grain",
    "Lustucru",
    "Riz long grain",
    "Le Riz à Poêler doré et moelleux",
    "Le Riz à poêler Tomates provençales",
    "Le basmati Pur HIMALAYA",
    "Riz risotto",
    "Nouilles fines 3 minutes",
    "Le Risotto à poêler Crémeux",
    "Graine de Couscous Fin (+ 25 % Gratuit) ",
    "Alphabet, Pâtes à potage"]
}
STR;

?>