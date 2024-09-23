<?php

namespace Database\Seeders;

use App\Models\AboutContent;
use App\Models\BlogContent;
use App\Models\ContactContent;
use App\Models\Footer;
use App\Models\Header;
use App\Models\HomeContent;
use App\Models\Page;
use App\Models\Project;
use App\Models\ProjectContent;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->createPage();
        $this->createHomeContent();
        $this->createAboutContet();
        $this->createProjectContent();
        $this->createBlogContent();
        $this->createFooter();
        $this->createHeader();
    }

    public function createPage()
    {
        $items = [
            ['name' => 'home', 'url' => route('home'), 'title' => 'Minha casa na Internet • Mikael Oliveira'],
            ['name' => 'sobre', 'url' => route('about'), 'title' => 'Sobre • Mikael Oliveira'],
            ['name' => 'projetos', 'url' => route('project'), 'title' => 'Meus projetos • Mikael Oliveira'],
            ['name' => 'blog', 'url' => route('blog'), 'title' => 'Blog • Mikael Oliveira'],
            ['name' => 'contato', 'url' => route('contact'), 'title' => 'Contato • Mikael Oliveira']
        ];

        foreach ($items as $item) {
            Page::create([
                'name' => $item['name'],
                'url' => $item['url'],
                'access' => 0,

                'title' => $item['title'],

                'og_title' => 'Mikael Oliveira',
                'og_description' => 'Conheça mais sobre mim e leia meus posts sobre desenvolvimento e tecnologia."',
                'og_image' => asset('assets/images/cat.png'),
                'og_url' => 'mikaeloliveira.com.br',
                'og_type' => 'website',

                'description' => 'Descrição personalizada para a página inicial."',
                'keywords' => 'Mikael Oliveira, blog, desenvolvimento, tecnologia, posts, Laravel, Livewire, faculdade',

                'twitter_card' => 'summary_large_image',
                'twitter_title' => 'Mikael Oliveira',
                'twitter_description' => 'Conheça mais sobre mim e leia meus posts sobre desenvolvimento e tecnologia.',
                'twitter_image' => asset('assets/images/cat.png'),
            ]);
        }
    }

    public function createHomeContent()
    {
        HomeContent::create([
            'link' => 'https://github.com/LordBluue3',
            'text_button' => 'Se quiser você pode dar uma olhada no meu .',
            'where_link_go' => 'GitHub',
            'title' => 'Seja bem-vindo ao meu cantinho na internet!',
            'description' => 'Aqui você vai poder conhecer um pouco mais sobre mim, explorar meus posts, acompanhar os projetos em que estou trabalhando e, quem sabe, até encontrar algo que inspire ou ajude você. 😊',
            'image' => 'assets/images/home/image.png',
        ]);
    }

    public function createAboutContet()
    {
        AboutContent::create([
            'title' => 'Quem Sou Eu: Uma Jornada de Paixão e Conhecimento',
            'description' => 'Olá! Sou Mikael Oliveira, e aqui você vai descobrir um pouco mais sobre minha jornada, meus projetos e tudo o que me motiva. Adoro compartilhar minhas experiências, desde as aventuras profissionais até as pequenas descobertas do dia a dia. Navegue pelos meus posts e projetos para entender melhor o que me inspira e como posso colaborar com você. Espero que você se sinta em casa por aqui!',
            'image_1' => 'assets/images/about/livewire.png',
            'image_2' => 'assets/images/about/react.png',
            'image_3' => 'assets/images/about/laravel.png',
            'image_4' => 'assets/images/about/php.png',
            'image_5' => 'assets/images/about/typescript.png',
            'quote' => '[
                {"phrase":"", "name":"", "profission":"", "image":""}
            ]',
            'title_1' => 'Explorando o Mundo da Tecnologia com Paixão',
            'description_1' => 'Olá me chamo Mikael, tenho 21 anos sou formado em Desenvolvimento de sistemas e estou cursando Ciência da Computação e fazendo curso de inglês e você chegou na minha casa na internet não repare toda essa bagunça.

            Gosto bastante de desenvolver coisas, solucionar problemas que as pessoas dizem ser impossiveis de arrumar, e ver as pessoas usando as coisas que desenvolvi! Atualmente sou o desenvolvedor da plataforma TGarante e da Noweb.

            Gosto muito de programar em PHP usando o Laravel (Inclusive o site que você está acessando nesse momento é feito em PHP/Laravel), mas também já trabalhei com React e React Native.

            Aprendi a programar em meados de 2019, quando iniciei no curso de desenvolvimento lá pude aprender muitas coisas e uma delas foi aprender a gostar de programar : )',
            'subtitle_1' => 'Age',
            'text_1' => '21',
            'subtitle_2' => 'Main',
            'text_2' => 'PHP',
            'subtitle_3' => 'Hate',
            'text_3' => 'C',
            'subtitle_4' => 'Distro',
            'text_4' => 'Mint',
            'timeline' => '[
                {"image": "", "language": "", "link": ""},
                {"image": "", "language": "", "link": ""}
            ]',
            'title_2' => 'Aqui estão algumas linguagens, frameworks e tecnologias que já trabalhei.',
            'description_2' => 'Aqui estão algumas linguagens, frameworks e tecnologias que já trabalhei.',
            'technology' => '[
                {"image":"", "language":"", "link":""},
                {"image":"", "language":"", "link":""}
            ]',
        ]);
    }

    public function createProjectContent()
    {
        ProjectContent::create([
            'image' => 'assets/images/project/cat_blue.png',
            'quote' => '[
                {"image":"", "phrase":"A parte mais legal de desenvolver algo é ver as pessoas usando aquilo que você criou <3"}
            ]',
            'title' => 'Projetos',
            'description' => 'Aqui estão alguns projetos que estou desenvolvendo.',
        ]);
    }

    public function createBlogContent()
    {
        BlogContent::create([
            'image' => 'assets/images/blog/cat_blue.png',
            'quote' => '[
                {"image":"", "phrase":"Sempre antes de dormir se faça essa pergunta, o que eu aprendi de novo hoje? Se você conseguir responder isso você pode ir dormir tranquilo : )"}
            ]',
            'title' => 'Meu Blog',
            'description' => 'Aqui você vai encontrar histórias, conteudo sobre tecnologia e muito mais.',
            'title_newsletter' => 'Quer ser atualizado quando tiver novos posts?
            Coloque seu melhor email .'
        ]);
    }

    public function createContactContent()
    {
        ContactContent::create([
            'title' => 'Que tal conversarmos com um café?',
            'description' => 'Tem uma ideia incrível e quer colocá-la em prática? Fala comigo, vamos tirar esse projeto do papel juntos!',
            'email' => 'contato@mikaeloliveira.com.br'
        ]);
    }

    public function createFooter()
    {
        $items = [['icon'=> '', 'link' => '']];
        foreach($items as $item){
            Footer::create([
                'icon' => $item['icon'],
                'link' => $item['link']
            ]);
        }

    }

    public function createHeader()
    {
        Header::create(['logo' => 'assets/logo.png']);
    }
}
