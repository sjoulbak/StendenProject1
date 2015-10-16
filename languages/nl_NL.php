<?php
/**
 * Created by PhpStorm.
 * User: alwin_000
 * Date: 9-10-2015
 * Time: 09:33
 */

function homePage(){
    $page = '<div class="row">
               <div class="col-md-6"><img src="images/pic1.jpg" style="width: 100%;"/></div>
               <div class="col-md-6"><img src="images/pic2.jpg" style="width: 100%;"/></div>
             </div>';

    return $page;
}
function educationsPage(){
    $page = "<h1>Opleidingen</h1>";

    if(isset($_GET['id'])){
        switch($_GET['id']){
            case 1:
                $page .= "
                <article>
                    <h3>Sportpsychologie</h3>
                    <p>Wat je ook doet in de sport, de opleiding Sportpsychologie opent beslist je ogen voor de boeiende psychologische aspecten van sportgedrag. En dat kan erg nuttig zijn. Als je sporters coacht en je ze nog beter wilt begeleiden. Of voor jezelf, als je bijvoorbeeld aan fitness doet of hardloopt en net dat beetje extra wilt geven. In ieder sportmens vormen lichaam, geest en ziel ��n geheel. Om sportief succes te boeken, moeten alle drie de elementen in balans zijn. Naast de noodzakelijke lichamelijke conditie is ook de mentale gesteldheid van een sporter bepalend voor zijn welzijn en zijn prestatie. Juist daarmee houdt de sportpsychologie zich bezig. Na voltooiing van deze opleiding weet je hoe sportprestaties zijn verbonden met de menselijke psyche.</p>
                    <p>
                        De opleiding Sportpsychologie is een thuisstudie en bestaat uit tien modules. Het lesmateriaal bestaat uit veel praktische oefeningen, onderzoek en informatie uit casestudies. Voor de opleiding Sportpsychologie is geen speciale vooropleiding nodig. Je krijgt een volledig overzicht van de huidige stand van zaken in de psychologie van sportgedrag en prestatie. Dankzij oefeningen onder het motto Hoe sta je ervoor? aan het slot van ieder hoofdstuk, krijg je direct meer zelfbewustzijn. Je wordt voortdurend aangespoord om de suggesties en adviezen uit iedere les zo veel mogelijk toe te passen. Zo wordt het volgen van de opleiding Sportpsychologie ook echt een levende ervaring voor je. Tijdens de opleiding komen de volgende onderwerpen aan bod:
                        <ul>
                        <li>De discipline doorgelicht</li>
                        <li>Een gezonde geest in een gezond lichaam</li>
                        <li>Psychologie en sportprestatie</li>
                        <li>Jeugd(top)sport</li>
                        <li>Vaardigheid en topprestatie</li>
                        <li>Het profiel van de kampioen</li>
                        <li>De kunst van het coachen</li>
                        <li>Psychological Skills Training (PST)</li>
                        <li>De (top)sportwereld</li>
                        <li>Het mental trainingprogramma</li>
                        </ul>
                    </p>
                    <strong>Doorstuderen?</strong>
                    <p>
                        Heb je de opleiding Sportpsychologie / Mental Coach afgerond en wil je je verder ontwikkelen? De opleidingen van de divisie Coaching & Management zijn de perfecte vervolgopleidingen. Tevens is het mogelijk om je in de breedte te ontwikkelen door aanvullende opleidingen te volgen binnen de Fitness Academy.
                    </p>
                </article>
                ";
                break;
            case 2:

                $page .= "
                <article>
                    <h3>Fitness Management & Ondernemen</h3>
                    <p>De Hogeschool Meppel opleiding Fitness Management & Ondernemen heeft zich de afgelopen jaren ontwikkeld tot de succesformule voor vele hedendaagse, succesvolle fitness managers en ondernemers. Ben jij werkzaam in de fitnessbranche of is het je ambitie aan de slag te gaan als ondernemer of manager binnen deze branche? Kies dan voor de opleiding Hogeschool Meppel Fitness Management & Ondernemen. Deze vijfdaagse business school is speciaal gericht op enthousiaste managers, potentiele managers en ondernemers die bereid zijn nieuwe en beproefde strategie�n te gebruiken om hun dromen om te zetten in winstgevende werkelijkheid.</p>
                    <p>
                        Veel managers & ondernemers binnen de fitnessbranche kijken terug op de successen uit het verleden en kijken uit naar een succesvolle toekomst. De realiteit van vandaag is dat het succes uitblijft en wordt verschoven naar de toekomst. De opleiding Hogeschool Meppel Fitness Management & Ondernemen geeft je alle tools om vandaag nog een succes te maken van jouw fitnessonderneming.<br />
                        Tijdens de opleiding ga je vijf weken intensief aan de slag. In 5 weken krijg je inzichtelijk wat op dit moment de handrem op het succes is en wat je kunt doen om dit te doorbreken. Je leert moderne en beproefde strategie�n die vandaag nog zorgen voor succes. Deze opleiding geeft je de kennis en de vaardigheden om de werkelijkheid te veranderen en door te bouwen aan een succesvol (fitness) bedrijf.<br /><br />
                        De opleiding Hogeschool Meppel Fitness Management & Ondernemen bestaat uit de volgende vijf modules:
                        <ul>
                        <li>Dag 1: Algemeen & Integraal management</li>
                        <li>Dag 2: Sales management</li>
                        <li>Dag 3: Marketing management</li>
                        <li>Dag 4: Retentie management</li>
                        <li>Dag 5: Inspirerend Leiderschap</li>
                        </ul>
                    </p>
                    <strong>Doorstuderen?</strong>
                    <p>
                        Heb je de opleiding General Manager afgerond en wil je je verder ontwikkelen? De opleidingen van de divisie Coaching & Management zijn de perfecte vervolgopleidingen
                    </p>
                </article>
                ";
                break;
            case 3:

                $page .= "
                <article>
                    <h3>Jazz & Pop</h3>
                    <p>
                        Dit is Jazz & Pop bij ArtEZ in Zwolle:
                        <ul>
                            <li>Je eigen studie vormgeven door een breed aanbod aan keuzevakken en een nauwe samenwerking met het werkveld.</li>
                            <li>Optimale ontwikkeling van zowel je creativiteit en muzikale persoonlijkheid als ambachtelijke vaardigheden op je instrument.</li>
                            <li>Keuze uit 11 hoofdvakken.</li>
                            <li>Begeleiding door gerenommeerde docenten en gastdocenten.</li>
                            <li>Praktijkervaring opdoen en netwerk opbouwen tijdens projecten, festivals en concerten.</li>
                        </ul>

                        <br />
                        Op de Hogeschool Meppel bieden wij elf verschillende hoofdvakken aan:
                        <ul>
                            <li>Basgitaar</li>
                            <li>Contrabas</li>
                            <li>Drums</li>
                            <li>Gitaar</li>
                            <li>Hammond</li>
                            <li>Klarinet</li>
                            <li>Piano en toetsen</li>
                            <li>Saxofoon</li>
                            <li>Trombone</li>
                            <li>Trompet</li>
                            <li>Zang</li>
                        </ul>
                        Na je studie ben je een veelzijdig musicus, die uitstekend op de huidige, veelzijdige beroepspraktijk is voorbereid. Je kunt ook doorstromen naar de master.
                    </p>
                </article>
                ";
                break;
        }
        $page.= '
            <hr>
            <h3>Andere pagina\'s</h3>
        ';
    }
    $page .= '
        <strong>Sport en bewegen</strong>
        <ul>
            <li><a href="?page=educations&id=1">Sportpsychologie</a></li>
            <li><a href="?page=educations&id=2">Fitness Management & Ondernemen</a></li>
        </ul>
        <strong>Muziek</strong>
        <ul>
            <li><a href="?page=educations&id=3">Jazz & Pop</a></li>
        </ul>
    ';
    return $page;
}
function ContactPage(){
    $page =  "<h1>Contact</h1>";
    $page .= "
            <article>

                <h3>Stenden Hogeschool Meppel</h3>
                <strong>Bezoekadres</strong><br />
                Van der Duyn van Maasdamstraat 1<br />
                7942 AT Meppel<br />
                <br />
                <strong>Postadres</strong><br />
                Van der Duyn van Maasdamstraat 1<br />
                7942 AT Meppel<br />
                <br />
                meppel@stenden.com
                <br />
                +31 (0)522 853 400
            </article>
            <article id='formulier'>
                <form action='#formulier' method='post'>
                    <div id='name' class='input-block'>
                        <label for='input_name'>Naam</label>
                        <input type='text' name='name' id='input_name'/>
                    </div>
                    <div id='mail' class='input-block'>
                        <label for='input_mail'>Email</label>
                        <input type='text' name='mail' id='input_mail'/>
                    </div>
                    <div id='subject' class='input-block'>
                        <label for='input_subject'>Onderwerp</label>
                        <input type='text' name='subject' id='input_subject'/>
                    </div>
                    <div id='message' class='input-block'>
                        <label for='input_message'>Bericht</label>
                        <textarea name='message' id='input_message'></textarea>
                    </div>
                    <div class='input-block'>
                        <label></label>
                        <input type='submit' name='contact' id='send' value='Verstuur'/>
                    </div>
                </form>
            </article>
        ";

    if(isset($_POST['contact'])){
        $page .= '
                    <script type="application/javascript">
                ';
        $error = 0;
        if(strlen($_POST['name']) < 2){
            $page .= generateJavascriptErrors("name", "Naam is niet lang genoeg");
            $error++;
        }
        if(strlen($_POST['mail']) < 5){
            $page .= generateJavascriptErrors("mail", "Email is niet lang genoeg.");
            $error++;
        }elseif(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
            $page .= generateJavascriptErrors("mail", "Email is niet juist.");
            $error++;
        }
        if(strlen($_POST['subject']) < 2){
            $page .= generateJavascriptErrors("subject", "Onderwerp is niet lang genoeg.");
            $error++;
        }
        if(strlen($_POST['message']) < 5){
            $page .= generateJavascriptErrors("message", "Bericht is niet lang genoeg.");
            $error++;
        }
        $page .= '
                document.getElementById("input_name").value = "'.$_POST['name'].'";
                document.getElementById("input_mail").value = "'.$_POST['mail'].'";
                document.getElementById("input_subject").value = "'.$_POST['subject'].'";
                document.getElementById("input_message").innerHTML = "'.$_POST['message'].'";
            ';
        if($error == 0){
            $page .= '

                document.getElementById("input_name").setAttribute("disabled", "true");
                document.getElementById("input_mail").setAttribute("disabled", "true");
                document.getElementById("input_subject").setAttribute("disabled", "true");
                document.getElementById("input_message").setAttribute("disabled", "true");
                document.getElementById("send").setAttribute("disabled", "true");
            ';
        }
        $page .= '
                    </script>
                ';

    }
    return $page;
}
