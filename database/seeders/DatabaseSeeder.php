<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        DB::table('listings')->insert([
            [
                'title' => 'Full Stack Developer',
                'tags'=> 'PHP, JAVASCRIPT, MYSQL, REACT',
                'company'=>'Acme Corp',
                'location'=>'New York, NY',
                'email' => 'jobs@xyzsolutions.com',
                'website' => 'https://www.xyzsolutions.com/careers',
                'description' => 'ABC Corporation is seeking an experienced full stack developer to join our team. The ideal candidate will have a strong background in PHP and JavaScript, as well as experience working with MySQL and React. In this role, you will be responsible for developing and maintaining web applications and services for our clients. We offer a competitive salary, great benefits, and a collaborative work environment.',
            ],
            [
                'title' => 'Backend Developer',
                'tags'=> 'PYTHON, DJANGO, POSTGRESQL, REST API',
                'company'=>'XYZ Solutions',
                'location'=>'Seattle, WA',
                'email' => 'jobs@acmecorp.com',
                'website' => 'www.acmecorp.com',
                'description' => 'XYZ Solutions is seeking a talented backend developer to help us build and maintain our web applications. The ideal candidate will have experience with Python and Django, as well as knowledge of PostgreSQL and REST APIs. You will work closely with our team of designers and front-end developers to create fast, reliable, and scalable web services. We offer competitive compensation, flexible work hours, and opportunities for growth and advancement.',
            ],
            [
                'title' => 'Mobile Developer',
                'tags'=> 'SWIFT, iOS, XCODE, FIREBASE API',
                'company'=>'123 Technologies',
                'location'=>'Manathan, CD',
                'email' => 'jobs@123tech.com',
                'website' => 'www.123tech.com/careers',
                'description' => '123 Technologies is looking for a skilled mobile developer to help us build cutting-edge iOS applications. The ideal candidate will have experience with Swift, Xcode, and Firebase, as well as a passion for creating beautiful and intuitive user interfaces. You will work closely with our designers and product managers to deliver world-class mobile experiences. We offer competitive salaries, great benefits, and a dynamic and fast-paced work environment.',
            ],
            [
                'title' => 'Backend Developer',
                'tags'=> 'REACT, JAVASCRIPT, HTML, CSS',
                'company'=>'Acme Software',
                'location'=>'Austin, TX',
                'email' => 'jobs@acmesoftware.com',
                'website' => 'https://www.acmesoftware.com/careers',
                'description' => 'Acme Software is seeking a talented frontend developer to join our team. The ideal candidate will have experience with React, JavaScript, CSS, and HTML, as well as knowledge of modern web development practices. You will be responsible for building and maintaining web applications for our clients, as well as contributing to our internal development projects. We offer competitive compensation, a great work-life balance, and opportunities for career growth.',
            ],
            [
                'title' => 'Backend Developer',
                'tags'=> 'JAVA, SPRING, AWS, AGILE',
                'company'=>'Blue Sky Solutions',
                'location'=>'Denver, CO',
                'email' => 'jobs@blueskytech.com',
                'website' => 'www.acmecorp.com',
                'description' => 'Of course, manually specifying the attributes for each model seed is cumbersome. Instead, you can use model factories to conveniently generate large amounts of database records. First, review the model factory documentation to learn how to define your factories.',
            ],
            [
                'title' => 'Junior Frontend Developer',
                'tags'=> 'JAVASCRIPT, PHP, AWS, GIT',
                'company'=>'Blue Sky Solutions',
                'location'=>'Kigali Rw, Gasabo',
                'email' => 'jobs@rwandabuild.com',
                'website' => 'www.rwandabuild.com',
                'description' => 'Of course, manually specifying the attributes for each model seed is cumbersome. Instead, you can use model factories to conveniently generate large amounts of database records. First, review the model factory documentation to learn how to define your factories.',
            ],
        ]);
    }
}
