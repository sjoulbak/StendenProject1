<?php
/**
 * Created by PhpStorm.
 * User: alwin_000
 * Date: 9-10-2015
 * Time: 09:33
 */
function homePage(){
      $page = '<div class="row">
               <div class="col-md-6"></div>
               <div class="col-md-6"></div>
             </div>
             <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
              </div>';
    return $page;
}

function educationsPage(){
    $page = "<h1>Educations</h1>";

    if(isset($_GET['id'])){
        switch($_GET['id']){
            case 1:
                $page .= "
                    <article>
                        <h3>Sports Psychology</h3>
                        <p>What you do in the sport, the Sport Psychology definitely opens your eyes to the interesting psychological aspects of sport behavior. And that can be very useful. If you coach athletes and get them to guide even better. Or for yourself, if you for instance do fitness or running, and want to give that little bit extra.In any sport form man body, mind and spirit a whole. To book sporting success, all three elements are in balance. Besides the necessary physical fitness is also the mental state of an athlete determines his health and his performance. Precisely thereby sports psychology is concerned. Upon completion of this course you know how sport performance is linked to the human psyche.Contents of the training course Sports PsychologyTraining Sports psychology is a home study and consists of ten modules. The course material consists of many practical exercises, research and information from case studies. For the Sport Psychology is no special training. You get a complete overview of the current state of affairs in the psychology of sport behavior and performance. Thanks exercises under the banner How do you stand it? At the end of each chapter, you will direct more self-awareness. You are constantly encouraged to apply the suggestions and opinions from every class as much as possible. Thus, following the training Sports psychology really a living experience for you. During the training the following topics:</p>
                        <p>
                            De opleiding Sportpsychologie is een thuisstudie en bestaat uit tien modules. Het lesmateriaal bestaat uit veel praktische oefeningen, onderzoek en informatie uit casestudies. Voor de opleiding Sportpsychologie is geen speciale vooropleiding nodig. Je krijgt een volledig overzicht van de huidige stand van zaken in de psychologie van sportgedrag en prestatie. Dankzij oefeningen onder het motto Hoe sta je ervoor? aan het slot van ieder hoofdstuk, krijg je direct meer zelfbewustzijn. Je wordt voortdurend aangespoord om de suggesties en adviezen uit iedere les zo veel mogelijk toe te passen. Zo wordt het volgen van de opleiding Sportpsychologie ook echt een levende ervaring voor je. Tijdens de opleiding komen de volgende onderwerpen aan bod:
                            <ul>
                            <li>The discipline vetted</li>
                            <li>A healthy mind in a healthy body</li>
                            <li>Psychology and sports performance</li>
                            <li>Youth (top) sport</li>
                            <li>Skill and top performance</li>
                            <li>The profile of the champion</li>
                            <li>The art of coaching</li>
                            <li>Psychological Skills Training (PST)</li>
                            <li>The (top) sports</li>
                            <li>The mental training program</li>
                            </ul>
                        </p>
                        <strong>By studying?</strong>
                        <p>
                           Have you completed the Sport Psychology / Mental Coach and would you like to develop further? The programs at divisional Coaching & Management are the perfect follow-up courses. It is also possible to develop your in width by following additional training in the Fitness Academy.
                        </p>
                        <strong>Examination</strong><br />
                        <p>
                        You pass the Sport Psychology if you have earned a passing grade for all assignments.

                       </p>
                    </article>
                ";
                break;

            case 2:

                $page .= "
                <article>
                    <h3>Fitness Management & Entrepreneurship</h3>
                    <p>The College Meppel training Fitness Management & Business has evolved over the years to the success formula for many of today's successful fitness managers and entrepreneurs. Are you working in the fitness industry, or is it your ambition to go to work as an entrepreneur or manager in this industry? Choose the training College Meppel Fitness Management & Entrepreneurship. This five-day business school is specifically aimed at enthusiastic managers, potential managers and entrepreneurs who are willing to use new and proven strategies for their dreams turn into profitable reality.<br />
                    Content of the training Fitness Management & Entrepreneurship<br />
                    Many managers and entrepreneurs within the fitness industry can look back on the past successes and look forward to a successful future. The reality today is that it fails to successfully and is shifted to the future. Training College Meppel Fitness Management & Entrepreneurship gives you all the tools to make a success of your fitness business today.<br />
                    During the five weeks of intensive training you go to work. In five weeks, you get insight into what is currently the parking brake on the success and what you can do to break this. You learn modern and proven strategies that still care today for success. This course gives you the knowledge and skills to change reality and to build on a successful (fitness) company.
                    </p>
                    <p>
                        Training College Meppel Fitness Management & Entrepreneurship consists of the following five modules:
                        <ul>
                        <li>Day 1: General and Integral management</li>
                        <li>Day 2: Sales management</li>
                        <li>Day 3: Marketing management</li>
                        <li>Day 4: Retention Management</li>
                        <li>Day 5: Inspiring Leadership</li>
                        </ul>
                    </p>
                    <strong>By studying?</strong>
                    <p>
                        Have you completed the course General Manager and would you like to develop further? The programs at divisional Coaching & Management are the perfect follow-up courses.
                    </p>
                </article>
                ";
                break;

            case 3:

                $page .= "
                <article>
                    <h3>Jazz and Pop</h3>
                    <p>
                        This is Jazz & Pop at Hoogeschool Meppel
                        <ul>
                        <li>Possibility to design your own study through a wide range of electives and close cooperation with the industry</li>
                        <li>Optimal development of your creativity, musical personality and artistry with your instrument</li>
                        <li>Choice of 11 majors</li>
                        <li>Supervision by prominent lecturers and masterclasses with national and international guest lecturers</li>
                        <li>Acquisition of practical experience during projects, festivals and concerts
Following your studies, you will be a versatile and distinctive musician and will be well prepared for the world of contemporary professional practice. You can also continue your studies with a Master’s programme.
</li>
                        </ul>
                        <strong>Majors</strong>
                        <ul>
                            <li>Bass guitar</li>
                            <li>Double bass</li>
                            <li>Drums</li>
                            <li>Guitar</li>
                            <li>Hammond</li>
                            <li>Clarinet</li>
                            <li>Piano and keyboards</li>
                            <li>Saxophone</li>
                            <li>Trombone</li>
                            <li>Trumpet</li>
                            <li>Vocals</li>
                        </ul>
                    </p>
                </article>
                ";
                break;
        }
        $page.= '
            <hr>
            <h3>Other pages</h3>
        ';
    }

    $page .= '
        <strong>Sports</strong>
        <ul>
            <li><a href="?page=educations&id=1">Sports Psychology</a></li>
            <li><a href="?page=educations&id=2">Fitness Management & Entrepreneurship</a></li>
        </ul>
        <strong>Music</strong>
        <ul>
            <li><a href="?page=educations&id=3">Jazz and Pop</a></li>
        </ul>
        ';
    return $page;
}
function ContactPage(){
    $page = "<h1>Contact</h1>";
    $page .= "
                <article>

                    <h3>Stenden Hogeschool Meppel</h3>
                    <strong>Visitaddress</strong><br />
                    Van der Duyn van Maasdamstraat 1<br />
                    7942 AT Meppel<br />
                    <br />
                    <strong>Postaddress</strong><br />
                    Van der Duyn van Maasdamstraat 1<br />
                    7942 AT Meppel<br />
                    <br />
                    meppel@stenden.com
                    <br />
                    +31 (0)522 853 400
                </article>
        ";
    return $page;
}
