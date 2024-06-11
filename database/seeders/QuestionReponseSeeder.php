<?php

namespace Database\Seeders;

use App\Models\QuestionReponse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionReponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions_reponses = [
            [
                "question" => "Quelles sont les fonctionnalités du clavier gaming RGB ?",
                "reponse" => "Le clavier gaming RGB est doté de plusieurs fonctionnalités, notamment un rétroéclairage RGB personnalisable avec différents modes d'éclairage, des touches mécaniques pour une meilleure réactivité et durabilité, ainsi que des raccourcis programmables pour une utilisation plus pratique.",
                "article_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Est-ce que le clavier gaming RGB est compatible avec tous les types d'ordinateurs ?",
                "reponse" => "Oui, le clavier gaming RGB est compatible avec la plupart des ordinateurs, qu'ils soient équipés de Windows, Mac OS ou Linux. Il se connecte facilement via un port USB et est prêt à être utilisé sans nécessiter l'installation de pilotes supplémentaires.",
                "article_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Peut-on ajuster la luminosité du rétroéclairage RGB du clavier ?",
                "reponse" => "Oui, vous pouvez ajuster la luminosité du rétroéclairage RGB du clavier gaming selon vos préférences. Il offre plusieurs niveaux de luminosité, vous permettant de personnaliser l'ambiance lumineuse en fonction de votre environnement de jeu.",
                "article_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelle est la portée de la souris sans fil ?",
                "reponse" => "La souris sans fil a une portée sans fil allant jusqu'à 10 mètres. Vous pouvez l'utiliser confortablement sans restriction de mouvement, que ce soit sur votre bureau ou dans une pièce.",
                "article_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Combien de boutons programmables possède la souris sans fil ?",
                "reponse" => "La souris sans fil est équipée de 6 boutons programmables. Vous pouvez assigner différentes fonctions ou macros à ces boutons pour une utilisation personnalisée selon vos besoins et préférences.",
                "article_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelle est l'autonomie de la batterie de la souris sans fil ?",
                "reponse" => "La souris sans fil offre une autonomie de batterie durable. En utilisation normale, la batterie peut durer jusqu'à 12 mois. De plus, elle est dotée d'une fonction d'économie d'énergie qui la met automatiquement en veille lorsqu'elle n'est pas utilisée, prolongeant ainsi sa durée de vie.",
                "article_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Qu'est-ce que le son surround dans un casque gaming ?",
                "reponse" => "Le son surround dans un casque gaming est une technologie audio avancée qui permet de recréer un environnement sonore immersif. Grâce à des haut-parleurs positionnés stratégiquement dans le casque, vous pouvez entendre les sons provenant de différentes directions, vous plongeant ainsi au cœur de l'action pour une expérience de jeu plus réaliste.",
                "article_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Est-ce que le casque gaming surround est compatible avec toutes les plateformes de jeu ?",
                "reponse" => "Oui, le casque gaming surround est compatible avec la plupart des plateformes de jeu, y compris les PC, les consoles de jeux (PS4, Xbox One, etc.) et les appareils mobiles. Assurez-vous simplement de vérifier la compatibilité du casque avec la plateforme spécifique que vous utilisez.",
                "article_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Le casque gaming surround possède-t-il un microphone intégré ?",
                "reponse" => "Oui, le casque gaming surround est équipé d'un microphone intégré de haute qualité. Vous pouvez l'utiliser pour communiquer avec vos coéquipiers lors de parties en ligne, des sessions de chat vocal ou des diffusions en direct. Le microphone est généralement ajustable et offre une clarté vocale exceptionnelle.",
                "article_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les plateformes compatibles avec la manette de jeu ?",
                "reponse" => "La manette de jeu est généralement compatible avec une large gamme de plateformes de jeu, notamment les consoles de jeux (PS4, Xbox One, Nintendo Switch, etc.), les PC et les appareils mobiles. Assurez-vous de vérifier la compatibilité spécifique du modèle de la manette avec la plateforme que vous utilisez.",
                "article_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les fonctionnalités principales de la manette de jeu ?",
                "reponse" => "Les manettes de jeu modernes offrent une variété de fonctionnalités. Certaines caractéristiques courantes comprennent des sticks analogiques, des boutons d'action, des gâchettes, des pavés tactiles, des capteurs de mouvement, une connectivité sans fil et la vibration haptique. Elles sont conçues pour offrir une expérience de jeu confortable et réactive.",
                "article_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Peut-on personnaliser les boutons et les paramètres de la manette de jeu ?",
                "reponse" => "Oui, de nombreuses manettes de jeu permettent la personnalisation des boutons et des paramètres. Vous pouvez souvent attribuer des fonctions spécifiques à certains boutons, ajuster la sensibilité des sticks analogiques, configurer des profils de jeu et même ajuster la rétroaction haptique. Vérifiez les options de personnalisation disponibles pour le modèle de manette que vous possédez.",
                "article_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelle est la résolution de l'écran 27 pouces ?",
                "reponse" => "La résolution de l'écran 27 pouces peut varier en fonction du modèle, mais généralement, vous pouvez trouver des écrans 27 pouces avec une résolution de 1920x1080 pixels (Full HD), 2560x1440 pixels (Quad HD) ou même 3840x2160 pixels (4K Ultra HD). Assurez-vous de vérifier la résolution spécifique du modèle que vous souhaitez acheter.",
                "article_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les principales caractéristiques à considérer lors de l'achat d'un écran 27 pouces ?",
                "reponse" => "Lors de l'achat d'un écran 27 pouces, vous pouvez prendre en compte plusieurs caractéristiques importantes. Cela inclut la résolution de l'écran, le type de panneau (TN, IPS, VA), la fréquence de rafraîchissement, le temps de réponse, les ports de connectivité (HDMI, DisplayPort), les fonctionnalités ergonomiques (réglage de la hauteur, inclinaison, rotation) et les technologies supplémentaires telles que la compatibilité HDR ou la synchronisation adaptative (G-Sync, FreeSync).",
                "article_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Est-ce que la taille de l'écran 27 pouces convient pour le gaming ?",
                "reponse" => "Oui, un écran de 27 pouces est considéré comme une taille populaire pour le gaming. Il offre un bon équilibre entre une taille d'affichage confortable et une densité de pixels adaptée. Vous pouvez profiter d'une expérience de jeu immersive sans que les éléments à l'écran ne paraissent trop petits. Cependant, il est important de prendre en compte la résolution de l'écran pour garantir une netteté d'image optimale.",
                "article_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les spécifications clés de la carte graphique GTX 3080 ?",
                "reponse" => "La carte graphique GTX 3080 est basée sur l'architecture NVIDIA Ampere. Elle dispose de 8704 cœurs CUDA, d'une fréquence boost allant jusqu'à 1,71 GHz et d'une mémoire vidéo GDDR6X de 10 Go. Elle offre des performances exceptionnelles pour les jeux et les applications graphiques intensives.",
                "article_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelle est la différence entre la GTX 3080 et les autres cartes graphiques de la série RTX 30 de NVIDIA ?",
                "reponse" => "La GTX 3080 est positionnée comme une carte graphique haut de gamme de la série RTX 30 de NVIDIA. Elle offre des performances supérieures par rapport aux modèles inférieurs tels que la GTX 3070 et la GTX 3060. La principale différence réside dans le nombre de cœurs CUDA, la fréquence d'horloge et la quantité de mémoire vidéo disponible.",
                "article_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quels sont les avantages de la carte graphique GTX 3080 pour le gaming ?",
                "reponse" => "La carte graphique GTX 3080 offre des avantages significatifs pour le gaming. Elle permet de jouer aux derniers jeux AAA avec des paramètres graphiques élevés et des taux de rafraîchissement élevés. Grâce à ses performances élevées, elle prend également en charge la résolution 4K et la technologie de traçage de rayons, offrant ainsi une expérience visuelle réaliste et immersive.",
                "article_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les spécifications clés du processeur Ryzen 9 ?",
                "reponse" => " Le processeur Ryzen 9 est une unité de traitement puissante d'AMD. Il dispose de plusieurs cœurs et threads pour des performances multitâches exceptionnelles. Les modèles Ryzen 9 les plus récents sont basés sur l'architecture Zen 3 et offrent des vitesses d'horloge élevées, une mémoire cache généreuse et une prise en charge de l'overclocking.",
                "article_id" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelle est la différence entre le processeur Ryzen 9 et les autres processeurs Ryzen d'AMD ?",
                "reponse" => "Le Ryzen 9 est la gamme la plus haut de gamme des processeurs Ryzen d'AMD. Il offre le plus grand nombre de cœurs et de threads, ce qui se traduit par des performances de calcul élevées et une excellente capacité multitâche. Les modèles Ryzen 9 sont généralement recommandés pour les utilisateurs exigeants tels que les joueurs et les créateurs de contenu.",
                "article_id" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quels sont les avantages du processeur Ryzen 9 pour les tâches gourmandes en ressources ?",
                "reponse" => "Le processeur Ryzen 9 est conçu pour les tâches intensives en ressources telles que le rendu 3D, l'édition de vidéos et le streaming en direct. Grâce à ses nombreux cœurs et threads, il peut gérer simultanément plusieurs tâches complexes sans compromettre les performances. De plus, la prise en charge de l'architecture Zen 3 offre des améliorations significatives en termes d'efficacité énergétique et de performances par rapport aux générations précédentes.",
                "article_id" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Qu'est-ce que la mémoire RAM DDR4 ?",
                "reponse" => "La mémoire RAM DDR4 (Double Data Rate 4) est une technologie de mémoire volatile utilisée dans les ordinateurs. Elle offre des vitesses de transfert de données plus rapides et une meilleure efficacité énergétique par rapport à la génération précédente, DDR3. La mémoire RAM DDR4 est compatible avec les cartes mères modernes et offre une capacité de stockage plus élevée pour une meilleure performance globale du système.",
                "article_id" => 8,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelle est l'importance de la mémoire RAM DDR4 16 Go ?",
                "reponse" => "Une mémoire RAM DDR4 de 16 Go offre une capacité suffisante pour exécuter efficacement les applications et les jeux modernes. Elle permet de stocker temporairement les données en cours d'utilisation par le processeur, ce qui réduit les temps de chargement et améliore les performances globales du système. Une plus grande capacité de mémoire RAM permet également de gérer plusieurs tâches simultanément sans ralentissements.",
                "article_id" => 8,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Comment choisir la bonne mémoire RAM DDR4 16 Go pour mon système ?",
                "reponse" => "Lors du choix d'une mémoire RAM DDR4 16 Go, il est important de prendre en compte la fréquence, la latence et la compatibilité avec votre carte mère. Optez pour une mémoire avec une fréquence élevée pour des performances optimales. Vérifiez également la latence, qui mesure le temps de réponse de la mémoire. Assurez-vous que la mémoire RAM est compatible avec la configuration de votre carte mère en termes de sockets et de capacité maximale supportée.",
                "article_id" => 8,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Qu'est-ce qu'un SSD et quels sont les avantages d'un SSD 1 To ?",
                "reponse" => "Un SSD (Solid State Drive) est un dispositif de stockage de données électronique utilisant des puces de mémoire flash. Un SSD 1 To offre une capacité de stockage de 1 téraoctet, ce qui permet de stocker une grande quantité de données, y compris des fichiers volumineux tels que des vidéos, des jeux et des logiciels. Les avantages d'un SSD par rapport à un disque dur traditionnel incluent une vitesse de lecture/écriture plus rapide, une fiabilité accrue, une consommation d'énergie réduite et une durée de vie plus longue.",
                "article_id" => 9,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les principales caractéristiques à considérer lors du choix d'un SSD 1 To ?",
                "reponse" => "Lors du choix d'un SSD 1 To, il est important de prendre en compte la vitesse de lecture/écriture, l'interface de connexion (comme SATA, NVMe), la durée de vie prévue (mesurée en termes de TBW, ou téraoctets écrits), et les fonctionnalités de gestion de l'endurance (comme le cache SLC ou la technologie de nivellement d'usure). Il est également recommandé de consulter les avis et les performances générales du SSD pour prendre une décision éclairée.",
                "article_id" => 9,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Comment installer un SSD 1 To dans mon système ?",
                "reponse" => "L'installation d'un SSD 1 To dans votre système dépend de la configuration spécifique de votre ordinateur. En général, vous devrez ouvrir votre boîtier d'ordinateur, localiser l'emplacement approprié pour le SSD (généralement un emplacement SATA disponible), connecter les câbles d'alimentation et de données au SSD, puis fixer le SSD solidement dans le boîtier. Une fois le SSD installé physiquement, vous devrez également formater et partitionner le SSD dans le système d'exploitation pour commencer à l'utiliser.",
                "article_id" => 9,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelle est l'importance d'une alimentation de 750W pour mon système ?",
                "reponse" => "Une alimentation de 750W offre une capacité de puissance élevée pour alimenter efficacement les composants de votre système. Elle est recommandée pour les configurations de jeu haut de gamme ou pour les systèmes nécessitant une alimentation électrique supérieure, tels que ceux avec des processeurs puissants et des cartes graphiques haut de gamme. Une alimentation de 750W offre une marge de sécurité et permet une évolutivité future en cas d'ajout de composants gourmands en énergie.",
                "article_id" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles fonctionnalités rechercher lors du choix d'une alimentation 750W ?",
                "reponse" => "Lors du choix d'une alimentation 750W, il est important de rechercher des fonctionnalités telles que la certification d'efficacité énergétique (comme 80 Plus Bronze, Silver, Gold, etc.), des câbles modulaires ou semi-modulaires pour une gestion des câbles plus facile, des protections de sécurité intégrées (contre les surtensions, les courts-circuits, etc.), et une bonne réputation de la marque en termes de fiabilité et de performances.",
                "article_id" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Comment calculer la puissance requise pour mon système avec une alimentation 750W ?",
                "reponse" => "Pour calculer la puissance requise pour votre système, vous devez prendre en compte les spécifications de chaque composant, tels que le processeur, la carte graphique, la mémoire, les disques durs, etc. De nombreux fabricants de composants fournissent des recommandations de puissance minimale. Vous pouvez également utiliser des calculateurs de puissance en ligne pour obtenir une estimation plus précise. Il est important de prévoir une marge de sécurité pour permettre des pics de puissance et une efficacité optimale de l'alimentation.",
                "article_id" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelle est l'importance d'un bon ventilateur de CPU pour mon système ?",
                "reponse" => "Un bon ventilateur de CPU est essentiel pour maintenir des températures de fonctionnement optimales de votre processeur. Il aide à dissiper la chaleur générée par le CPU pendant son fonctionnement intensif, ce qui permet de prévenir la surchauffe et d'assurer des performances stables. Un ventilateur de CPU efficace contribue également à prolonger la durée de vie du processeur en le protégeant des températures excessives.",
                "article_id" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les caractéristiques importantes à considérer lors du choix d'un ventilateur de CPU ?",
                "reponse" => "Lors du choix d'un ventilateur de CPU, vous devriez prendre en compte des aspects tels que la compatibilité avec votre socket de processeur, les dimensions et la hauteur pour s'assurer qu'il s'adapte à votre boîtier, le niveau sonore produit par le ventilateur, les performances de refroidissement (mesurées en termes de débit d'air et de pression statique), ainsi que la qualité de fabrication et la réputation de la marque.",
                "article_id" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Air cooling ou water cooling : quel est le meilleur choix pour le refroidissement du CPU ?",
                "reponse" => "Le choix entre le refroidissement par air et le refroidissement par eau dépend de vos préférences personnelles et de vos besoins spécifiques. Les systèmes de refroidissement par air sont généralement plus abordables, faciles à installer et offrent de bonnes performances de refroidissement pour la plupart des utilisateurs. Les systèmes de refroidissement liquide (watercooling) peuvent offrir une dissipation de chaleur supérieure et sont souvent privilégiés par les utilisateurs qui souhaitent overclocker leur processeur ou qui recherchent un refroidissement plus silencieux.",
                "article_id" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelle est la taille idéale pour un tapis de souris XL ?",
                "reponse" => "La taille idéale d'un tapis de souris XL dépend de vos besoins et de l'espace disponible sur votre bureau. Cependant, en général, un tapis de souris XL mesure environ 90 cm de largeur et 40 cm de hauteur, offrant ainsi une surface étendue pour votre souris et votre clavier. Cette taille permet de placer confortablement votre souris et de bénéficier d'une grande liberté de mouvement.",
                "article_id" => 12,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quels sont les avantages d'un tapis de souris XL par rapport à un tapis de souris standard ?",
                "reponse" => "Un tapis de souris XL offre plusieurs avantages par rapport à un tapis de souris standard. Tout d'abord, sa taille étendue permet de placer à la fois votre souris et votre clavier sur la surface du tapis, offrant ainsi une expérience de jeu ou de travail plus fluide. De plus, un tapis de souris XL offre généralement une meilleure adhérence, une surface lisse et une meilleure durabilité grâce à son matériau de qualité supérieure.",
                "article_id" => 12,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Comment entretenir un tapis de souris XL ?",
                "reponse" => "Pour entretenir un tapis de souris XL, vous pouvez suivre ces conseils simples. Tout d'abord, utilisez un chiffon humide avec un peu de savon doux pour nettoyer régulièrement la surface du tapis. Évitez d'utiliser des produits chimiques agressifs qui pourraient endommager le matériau. De plus, assurez-vous de retirer les miettes et la saleté accumulées à l'aide d'un aspirateur ou en secouant doucement le tapis. Enfin, laissez le tapis de souris sécher complètement avant de l'utiliser à nouveau.",
                "article_id" => 12,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quels sont les avantages d'un microphone USB par rapport à un microphone analogique ?",
                "reponse" => "Un microphone USB présente plusieurs avantages par rapport à un microphone analogique. Tout d'abord, il offre une connexion simple et directe à votre ordinateur via le port USB, éliminant ainsi le besoin d'une interface audio externe. De plus, les microphones USB sont généralement plug-and-play, ce qui signifie qu'ils sont prêts à être utilisés sans nécessiter l'installation de pilotes ou de logiciels supplémentaires. Enfin, les microphones USB offrent souvent une meilleure qualité audio et une plus grande sensibilité, ce qui les rend idéaux pour les enregistrements vocaux, les podcasts, les appels vidéo et autres utilisations similaires.",
                "article_id" => 13,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Comment configurer un microphone USB sur mon ordinateur ?",
                "reponse" => "La configuration d'un microphone USB est généralement simple. Tout d'abord, branchez le microphone USB sur un port USB disponible de votre ordinateur. Ensuite, votre système d'exploitation devrait détecter automatiquement le microphone et l'ajouter comme périphérique audio. Vous devrez peut-être sélectionner le microphone USB comme périphérique d'entrée audio dans les paramètres audio de votre ordinateur. Assurez-vous également que le niveau de volume du microphone est réglé correctement pour éviter les distorsions ou les bruits indésirables. Vous pouvez ajuster ces paramètres audio dans les paramètres système ou dans le panneau de configuration de votre ordinateur.",
                "article_id" => 13,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les caractéristiques à rechercher lors de l'achat d'un microphone USB ?",
                "reponse" => "Lors de l'achat d'un microphone USB, voici quelques caractéristiques à prendre en compte. Tout d'abord, vérifiez la qualité audio du microphone en recherchant des spécifications telles que la réponse en fréquence, la sensibilité et le rapport signal/bruit. Assurez-vous également que le microphone est compatible avec votre système d'exploitation, qu'il dispose d'une connexion USB stable et qu'il est doté de fonctionnalités supplémentaires telles que des boutons de contrôle du volume ou des modes d'enregistrement spécifiques. Enfin, considérez également la conception et la taille du microphone, en choisissant celui qui convient le mieux à votre environnement d'utilisation.",
                "article_id" => 13,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les principales caractéristiques d'une webcam HD 1080p ?",
                "reponse" => "Une webcam HD 1080p offre une résolution vidéo de 1920x1080 pixels, ce qui permet d'obtenir une qualité d'image nette et détaillée lors des appels vidéo, des enregistrements ou des diffusions en direct. Elle est capable de capturer des images fluides à 30 images par seconde, offrant ainsi une expérience visuelle agréable. De plus, certaines webcams HD 1080p peuvent être équipées d'une fonction d'autofocus, de la réduction du bruit ou même de la correction automatique de l'éclairage, pour améliorer la qualité de l'image dans différentes conditions d'éclairage.",
                "article_id" => 14,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Comment installer une webcam HD 1080p sur mon ordinateur ?",
                "reponse" => "L'installation d'une webcam HD 1080p est généralement simple. Tout d'abord, branchez la webcam sur un port USB disponible de votre ordinateur. Ensuite, votre système d'exploitation devrait détecter automatiquement la webcam et l'ajouter comme périphérique vidéo. Dans la plupart des cas, vous n'aurez pas besoin d'installer des pilotes supplémentaires, car les webcams HD 1080p sont souvent plug-and-play. Vous pouvez ensuite configurer la webcam dans les paramètres de votre logiciel de communication ou de diffusion vidéo préféré pour l'utiliser lors de vos appels ou enregistrements.",
                "article_id" => 14,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les utilisations courantes d'une webcam HD 1080p ?",
                "reponse" => "Une webcam HD 1080p est polyvalente et peut être utilisée dans de nombreuses situations. Elle est idéale pour les appels vidéo de haute qualité, que ce soit pour les réunions professionnelles, les entretiens d'embauche à distance, les appels familiaux ou les discussions avec des amis. Elle convient également pour les enregistrements vidéo, que ce soit pour créer du contenu pour les réseaux sociaux, des tutoriels, des vidéos de jeu, des vlogs ou des diffusions en direct. Les webcams HD 1080p peuvent également être utilisées pour les conférences en ligne, les cours à distance, les webinaires et les présentations.",
                "article_id" => 14,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les principales fonctionnalités d'un volant de course ?",
                "reponse" => "Un volant de course offre plusieurs fonctionnalités pour une expérience de conduite réaliste. Il est équipé d'un volant à retour de force, qui simule les vibrations et les forces ressenties lors de la conduite. De plus, il possède des pédales d'accélérateur, de frein et d'embrayage pour une utilisation réaliste. Certains volants de course sont également dotés de boutons programmables, de palettes de changement de vitesse, d'un affichage intégré, et sont compatibles avec les consoles de jeux et les jeux de course populaires.",
                "article_id" => 15,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Comment connecter un volant de course à une console de jeu ou à un PC ?",
                "reponse" => "La connexion d'un volant de course dépend du modèle et de la plateforme utilisée. En général, les volants de course se connectent via un câble USB ou sans fil, selon le modèle. Pour les consoles de jeu, vous devrez connecter le volant à un port USB disponible ou à un récepteur sans fil spécifique à la console. Sur un PC, vous pouvez brancher le volant directement sur un port USB. Certains volants nécessitent l'installation de pilotes ou de logiciels spécifiques pour fonctionner correctement.",
                "article_id" => 15,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quels sont les avantages d'utiliser un volant de course pour les jeux de course ?",
                "reponse" => "L'utilisation d'un volant de course offre une expérience de jeu immersive et réaliste. Il permet un meilleur contrôle du véhicule virtuel grâce au volant à retour de force, qui transmet les vibrations et les forces de conduite. Les pédales d'accélérateur, de frein et d'embrayage procurent une sensation plus authentique lors des départs, des freinages et des changements de vitesse. En utilisant un volant de course, vous pouvez améliorer votre précision de conduite, votre temps de réaction et votre immersion dans le jeu de course.",
                "article_id" => 15,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Qu'est-ce qu'un routeur gaming et en quoi est-il différent d'un routeur classique ?",
                "reponse" => "Un routeur gaming est spécialement conçu pour répondre aux besoins des joueurs en ligne. Il offre des fonctionnalités avancées telles que la priorisation du trafic de jeu, la réduction de la latence, et la gestion efficace du flux de données. Contrairement à un routeur classique, un routeur gaming est optimisé pour offrir des performances réseau supérieures et une expérience de jeu en ligne plus fluide.",
                "article_id" => 16,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => " Comment un routeur gaming peut-il améliorer ma connexion et mon expérience de jeu en ligne ?",
                "reponse" => "Un routeur gaming utilise des technologies spécifiques pour optimiser la connexion et réduire la latence. Il peut offrir une priorisation du trafic de jeu, ce qui signifie que les données de jeu sont traitées en priorité par rapport aux autres types de données. Cela permet d'éliminer les retards et les ralentissements pendant le jeu en ligne, offrant ainsi une expérience plus fluide. De plus, certains routeurs gaming offrent une bande passante accrue et une meilleure couverture Wi-Fi pour une connectivité plus stable et fiable.",
                "article_id" => 16,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Comment configurer un routeur gaming pour obtenir les meilleurs résultats ?",
                "reponse" => "La configuration d'un routeur gaming dépend du modèle spécifique que vous possédez, mais voici quelques étapes générales à suivre. Tout d'abord, assurez-vous de mettre à jour le firmware du routeur avec la dernière version disponible. Ensuite, accédez à l'interface d'administration du routeur via un navigateur web et configurez les paramètres de réseau, tels que le nom du réseau (SSID) et le mot de passe. Ensuite, activez les fonctionnalités spécifiques au gaming, telles que la QoS (Quality of Service) pour la priorisation du trafic de jeu. Vous pouvez également configurer des règles de pare-feu pour optimiser la sécurité et la performance. Enfin, assurez-vous de positionner le routeur dans un emplacement central pour une meilleure couverture Wi-Fi.",
                "article_id" => 16,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les caractéristiques principales d'un sac à dos gamer ?",
                "reponse" => "Un sac à dos gamer est spécialement conçu pour répondre aux besoins des joueurs en déplacement. Il offre des caractéristiques telles que des compartiments rembourrés pour les ordinateurs portables et les accessoires de jeu, des poches dédiées pour les périphériques de jeu, des fermetures éclair résistantes, une conception ergonomique pour un confort optimal et des matériaux durables pour une protection accrue.",
                "article_id" => 17,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelle est la capacité typique d'un sac à dos gamer ?",
                "reponse" => "Les sacs à dos gamer varient en termes de capacité, mais la plupart d'entre eux offrent une capacité suffisante pour transporter un ordinateur portable de jeu de taille standard (généralement jusqu'à 15 pouces), ainsi que des accessoires de jeu tels que des souris, des claviers, des écouteurs et des câbles. Certains modèles plus spacieux peuvent même accueillir des consoles de jeu portables.",
                "article_id" => 17,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "question" => "Quelles sont les fonctionnalités supplémentaires à rechercher dans un sac à dos gamer ?",
                "reponse" => "En plus des caractéristiques de base, certains sacs à dos gamer offrent des fonctionnalités supplémentaires telles que des ports de chargement USB intégrés pour recharger vos appareils, des compartiments résistants à l'eau pour protéger vos équipements de jeu de l'humidité, des bandes réfléchissantes pour une meilleure visibilité la nuit et des sangles ajustables pour un ajustement personnalisé.",
                "article_id" => 17,
                "created_at" => now(),
                "updated_at" => now()
            ]
            
        ];
        QuestionReponse::insert($questions_reponses);
    }
}
