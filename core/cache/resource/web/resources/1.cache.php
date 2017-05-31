<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Головна',
    'longtitle' => 'Congratulations!',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => NULL,
    'content' => '<p>You have successfully installed MODX Revolution&nbsp;[[++settings_version]]!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your&nbsp;website. </p>

<h2>New to&nbsp;MODX?</h2>

<p>Pages on a MODX site are called <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/resources">Resources</a>, and are visible on the left-hand side of the manager in the Resources tab. Resources can be nested under other resources, making it easy to create a tree of resources. There are different types of resources for different use&nbsp;cases.</p>

<p>Building your website is done through a combination of <b>Templates</b>, <b>Template Variables</b>, <b>Chunks</b>, <b>Snippets</b> and <b>Plugins</b>. Collectively these are known as <b>Elements</b>, and can also be found in the left-hand side of the manager, in the Elements&nbsp;tab.</p>

<p><a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/templates">Templates</a> contain the outer markup of any page. Each resource can only be assigned to a single template at a time. By adding <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/customizing-content/template-variables">Template Variables</a> to a template, you can add custom fields for any resource using that particular&nbsp;template.</p>

<p>With <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/chunks">Chunks</a> you can share parts of the markup, such as a header, across different templates. <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/using-snippets">Snippets</a> are pieces of PHP that return dynamic content, such as summaries of other resources or the current date. With snippets, you will often use Chunks to mark up the pieces of content it returns, instead of mixing the PHP and&nbsp;HTML.</p>

<p>Finally, <a href="https://rtfm.modx.com/revolution/2.x/developing-in-modx/basic-development/plugins">Plugins</a> enable more advanced features by hooking into the extensive events system provided by&nbsp;MODX.</p>

<p>To learn more about MODX, be sure to check out the <a href="https://rtfm.modx.com/revolution/2.x/getting-started">Getting Started</a> section in the official&nbsp;documentation.</p>
',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1493064895,
    'editedby' => 0,
    'editedon' => 0,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => NULL,
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<head>
<head>
[[$head]]
</head>

[[$section-1"]]

<section id="section-1">
<div class="main">
	<div class="sl">
		<div class="sl__slide">
			<img src="/assets/app/img/sl1.jpg" alt="Picture1" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl2.jpg" alt="Picture2" class="sl__img image-cl">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl3.jpg" alt="Picture3" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl4.jpg" alt="Picture4" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl5.jpg" alt="Picture5" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl6.jpg" alt="Picture6" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl6.jpg" alt="Picture7" class="sl__img">
		</div>
	</div>
	<div class="sl2">
  <div class="sl2__slide"><img src="/assets/app/img/sl1.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl2.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl3.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl4.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl5.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl6.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl7.jpg" alt="omg"></div>
 </div>
 <hr class="green">
</section>

[[#sections-film]]	

<section id="film" name="counter" class="text-md-center text-xs-center text-uppercase wow fadeIn" data-wow-duration="2s" 
 data-wow-delay="0.2s">
 <hr>
		<div class="container clearfix">

		<button class="button-series-1">Серіали</button>	
		<div class="row">
				<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.1.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Острі козирьки</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.1.jpg" alt="about1"/></div> 
	<h3>Острі козирьки</h3> 
<p> 
Британський серіал про кримінальний світ Бірмінгема 20-х років минулого століття, в якому багатолюдна сім\'я Шелбі стала однією з найжорстокіших і впливових гангстерських банд післявоєнного часу. Фірмовим знаком угруповання, що займалася пограбуваннями та азартними іграми, стали зашиті в козирки леза. 
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.2.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content">
	<br> 
	<span class="about-p-name">Гра пристолів</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.2.jpg" alt="about1"/></div> 
	<h3Гра пристолів</h3> 
<p> 
Американський фантастичний телесеріал «Гра престолів» вийшов в прокат в 2011 році і є екранізацією знаменитого циклу романів «Пісня Льоду та полум\'я» письменника Джорджа Р. Р. Мартіна. Команді режисерів вдалося вдало відтворити всю суть книги і розповісти глядачеві неймовірну історію про вигадане казкове середньовіччя, в якому, як і в сучасному світі, є місце боротьбі за владу. Основна частина зйомок проходила в Північній Ірландії. Сучасні технології і екзотичність обстановки дозволяє повною мірою насолодитися подіями. Всього серіал складається з 10 серій. Перегляду кожної серії займе не більш 55 хвилин.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>

	<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.3.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Декстер</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.3.jpg" alt="about1"/></div> 
	<h3>Декстер</h3> 
<p> 
Декстер американський телесеріал каналу Showtime, заснований на романі Джеффрі Ліндсея «Дремлющий демон Декстера» (англ. Darkly Dreaming Dexter, дослівно «Похмурі мрії Декстера») і адаптований для телебачення лауреатом премії «Еммі», сценаристом Джеймсом Маносом-мл., який написав сценарій для пілотного епізоду. Події серіалу розповідають про Декстера Моргана (Майкл Холл), вигаданому серійного вбивцю, що працюють судовим експертом по бризок крові в поліції Маямі. Серіал неодноразово номінувався на різні премії, такі як «Еммі», IGN, Satellite Award і «Сатурн». Також серіал піддавався критиці з боку батьківських організацій (таких як Parents Television Council) як надмірно жорстокий і аморальний.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>

<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.4.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Таббу</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.4.jpg" alt="about1"/></div> 
	<h3>Таббу</h3> 
<p> 
Табу британський драматичний телесеріал, прем\'єра якого відбулася в Великобританії на каналі BBC One, а в США - на каналі FX. Восьмисерійний серіал, створений Томом Гарді, чіпси Харді і Стівеном Найтом, заснований на оповіданні Тома Харді, оповідає про шукачі пригод, успадкованих землю і намагаються отримати монополію на торгівлю з Китаєм [1] [2]. Серіал отримав позитивні відгуки критиків, які особливо відзначили акторську гру Тома Харді
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.5.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Американські боги</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.5.jpg" alt="about1"/></div> 
	<h3>>Американські боги</h3> 
<p> 
Тінь - людина з минулим. Але тепер єдине, чого він хоче - це жити тихим і спокійним життям зі своєю дружиною в стороні від проблем. Поки він не дізнається про її загибелі в результаті нещасного випадку. По дорозі на похорон додому, коли найсильніший шторм стрясає літак, йому видається дивна людина з сусіднього крісла. Він називає себе містер Середовище. І він знає про Тіні більше, ніж здається можливим. Він попереджає Тінь, що гряде ще більший шторм. І ніщо з цього моменту, включаючи його самого, не буде таким, як раніше.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.6.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Доктор Хаус</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 1.2.jpg" alt="about1"/></div> 
	<h3>Доктор Хаус</h3> 
<p> 
Хаус підтримує дружні відносини тільки з доктором Вілсоном, якому вистачає терпіння перебувати поруч зі своїм цинічним іншому, а ось з начальницею Лізою Кадді він дуже часто конфліктує з-за роботи. За наполяганням тієї ж Кадді Хаус набирає собі команду діагностів з трьох фахівців: Формана, в минулому якого проблеми з поліцією, Кемерон - єдиної жінки в команді і хорошому імунолога, а також Чейза, взятого в команду, за словами Хауса, через зв\'язки його батька. Всім трьом доведеться звикати не тільки один до одного, але і до характеру і методам роботи свого начальника.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
</div>
</section>

<section id="film" name="counter" class="text-md-center text-xs-center text-uppercase wow fadeIn" data-wow-duration="2s" 
 data-wow-delay="0.2s">
 <hr>
		<div class="container clearfix">
		<button class="button-games-1">Ігри</button>	
		<div class="row">
	<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.1.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">CSGO</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.1.jpg" alt="about1"/></div> 
	<h3>CSGO</h3> 
<p> 
Counter-Strike: Global Offensive (CS: GO) відродив той ураганний командний ігровий процес, вперше представлений ще 16 років тому. CS: GO включає в себе нові карти, персонажів, зброю і їх поліпшені версії з класичної CS (de_dust і т.п.). Крім того, CS: GO містить нові ігрові режими, систему організації матчів, глобальні таблиці гравців і багато іншого. «Counter-Strike була сюрпризом для ігрової індустрії, коли не особливо вдалий мод став одним з найпопулярніших шутерів в світі відразу ж після його релізу в серпні 1999 року, - говорить Даг Ломбарді з Valve, - за минулі 12 років, вона все ще одна з найпопулярніших в світі ігор, часто з\'являється на ігрових змаганнях і продана в кількості більше 25 мільйонів копій по всьому світу. CS: GO відродив знаменитий ігровий процес Counter-Strike і запропонував його гравцям не тільки на ПК, але і на консолях наступного покоління і комп\'ютерах Mac ». CS: GO розробляється Valve у співпраці з Hidden Path Entertainment.
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">
</p> 
</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.2.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Dota 2</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.2.jpg" alt="about1"/></div> 
	<h3>Dota 2</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.3.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">GTA 5</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.3.jpg" alt="about1"/></div> 
	<h3>GTA 5</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.4.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Dead island</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.4.jpg" alt="about1"/></div> 
	<h3>Dead island</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.5.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Resident Evil 7</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.5.jpg" alt="about1"/></div> 
	<h3>Resident Evil 7</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.6.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Форсаж 8</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.6.jpg" alt="about1"/></div> 
	<h3>Креативні</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
</section>

<footer>
<hr>
	<div class="container clearfix">
		<div class="blockquote-footer ">
		<div class="two-block col-md-6">
		<div class="mail">
		<a href="raider_yura_1998@mail.ru">raider_yura_1998@mail.ru</a>
		</div>
		<div class="address">м. Чернівці, 59310 с. Киселів, вул.Героїв Майдану, дім 12</div>
		</div>
		<div class="three-block  pull-md-right">
       	<a href="https://vk.com/raider_yura" target="_blank" class="btn-social btn-vk">
        <i class="fa fa-vk"></i></a>
        <a href="https://www.facebook.com/" target="_blank" class="btn-social btn-facebook">
        <i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/ValentynMarusyk" target="_blank" class="btn-social btn-twitter">
        <i class="fa fa-twitter"></i></a>
        <a href="https://plus.google.com/u/0/105071669603249915743" target="_blank" class="btn-social btn-google-plus">
        <i class="fa fa-google-plus"></i></a>
        <a href="https://www.youtube.com/user/MrOwnage669/" target="_blank" class="btn-social btn-youtube">
        <i class="fa fa-youtube"></i></a>
    </div>
		</div>
	</div>
</footer>

[[$scripts]]

<html>





',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$section-1]]' => '<section id="section-1">
<div class="main">
	<div class="sl">
		<div class="sl__slide">
			<img src="/assets/app/img/sl1.jpg" alt="Picture1" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl2.jpg" alt="Picture2" class="sl__img image-cl">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl3.jpg" alt="Picture3" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl4.jpg" alt="Picture4" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl5.jpg" alt="Picture5" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl6.jpg" alt="Picture6" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl6.jpg" alt="Picture7" class="sl__img">
		</div>
	</div>
	<div class="sl2">
  <div class="sl2__slide"><img src="/assets/app/img/sl1.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl2.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl3.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl4.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl5.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl6.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl7.jpg" alt="omg"></div>
 </div>
 <hr class="green">
</section>',
    '[[$section-series]]' => '<section id="film" name="counter" class="text-md-center text-xs-center text-uppercase wow fadeIn" data-wow-duration="2s" 
 data-wow-delay="0.2s">
 <hr>
		<div class="container clearfix">

		<button class="button-series-1">Серіали</button>	
		<div class="row">
				<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.1.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Острі козирьки</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.1.jpg" alt="about1"/></div> 
	<h3>Острі козирьки</h3> 
<p> 
Британський серіал про кримінальний світ Бірмінгема 20-х років минулого століття, в якому багатолюдна сім\'я Шелбі стала однією з найжорстокіших і впливових гангстерських банд післявоєнного часу. Фірмовим знаком угруповання, що займалася пограбуваннями та азартними іграми, стали зашиті в козирки леза. 
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.2.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content">
	<br> 
	<span class="about-p-name">Гра пристолів</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.2.jpg" alt="about1"/></div> 
	<h3Гра пристолів</h3> 
<p> 
Американський фантастичний телесеріал «Гра престолів» вийшов в прокат в 2011 році і є екранізацією знаменитого циклу романів «Пісня Льоду та полум\'я» письменника Джорджа Р. Р. Мартіна. Команді режисерів вдалося вдало відтворити всю суть книги і розповісти глядачеві неймовірну історію про вигадане казкове середньовіччя, в якому, як і в сучасному світі, є місце боротьбі за владу. Основна частина зйомок проходила в Північній Ірландії. Сучасні технології і екзотичність обстановки дозволяє повною мірою насолодитися подіями. Всього серіал складається з 10 серій. Перегляду кожної серії займе не більш 55 хвилин.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>

	<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.3.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Декстер</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.3.jpg" alt="about1"/></div> 
	<h3>Декстер</h3> 
<p> 
Декстер американський телесеріал каналу Showtime, заснований на романі Джеффрі Ліндсея «Дремлющий демон Декстера» (англ. Darkly Dreaming Dexter, дослівно «Похмурі мрії Декстера») і адаптований для телебачення лауреатом премії «Еммі», сценаристом Джеймсом Маносом-мл., який написав сценарій для пілотного епізоду. Події серіалу розповідають про Декстера Моргана (Майкл Холл), вигаданому серійного вбивцю, що працюють судовим експертом по бризок крові в поліції Маямі. Серіал неодноразово номінувався на різні премії, такі як «Еммі», IGN, Satellite Award і «Сатурн». Також серіал піддавався критиці з боку батьківських організацій (таких як Parents Television Council) як надмірно жорстокий і аморальний.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>

<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.4.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Таббу</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.4.jpg" alt="about1"/></div> 
	<h3>Таббу</h3> 
<p> 
Табу британський драматичний телесеріал, прем\'єра якого відбулася в Великобританії на каналі BBC One, а в США - на каналі FX. Восьмисерійний серіал, створений Томом Гарді, чіпси Харді і Стівеном Найтом, заснований на оповіданні Тома Харді, оповідає про шукачі пригод, успадкованих землю і намагаються отримати монополію на торгівлю з Китаєм [1] [2]. Серіал отримав позитивні відгуки критиків, які особливо відзначили акторську гру Тома Харді
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.5.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Американські боги</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.5.jpg" alt="about1"/></div> 
	<h3>>Американські боги</h3> 
<p> 
Тінь - людина з минулим. Але тепер єдине, чого він хоче - це жити тихим і спокійним життям зі своєю дружиною в стороні від проблем. Поки він не дізнається про її загибелі в результаті нещасного випадку. По дорозі на похорон додому, коли найсильніший шторм стрясає літак, йому видається дивна людина з сусіднього крісла. Він називає себе містер Середовище. І він знає про Тіні більше, ніж здається можливим. Він попереджає Тінь, що гряде ще більший шторм. І ніщо з цього моменту, включаючи його самого, не буде таким, як раніше.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.6.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Доктор Хаус</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 1.2.jpg" alt="about1"/></div> 
	<h3>Доктор Хаус</h3> 
<p> 
Хаус підтримує дружні відносини тільки з доктором Вілсоном, якому вистачає терпіння перебувати поруч зі своїм цинічним іншому, а ось з начальницею Лізою Кадді він дуже часто конфліктує з-за роботи. За наполяганням тієї ж Кадді Хаус набирає собі команду діагностів з трьох фахівців: Формана, в минулому якого проблеми з поліцією, Кемерон - єдиної жінки в команді і хорошому імунолога, а також Чейза, взятого в команду, за словами Хауса, через зв\'язки його батька. Всім трьом доведеться звикати не тільки один до одного, але і до характеру і методам роботи свого начальника.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
</div>
</section>',
    '[[$section-games]]' => '<section id="film" name="counter" class="text-md-center text-xs-center text-uppercase wow fadeIn" data-wow-duration="2s" 
 data-wow-delay="0.2s">
 <hr>
		<div class="container clearfix">
		<button class="button-games-1">Ігри</button>	
		<div class="row">
	<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.1.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">CSGO</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.1.jpg" alt="about1"/></div> 
	<h3>CSGO</h3> 
<p> 
Counter-Strike: Global Offensive (CS: GO) відродив той ураганний командний ігровий процес, вперше представлений ще 16 років тому. CS: GO включає в себе нові карти, персонажів, зброю і їх поліпшені версії з класичної CS (de_dust і т.п.). Крім того, CS: GO містить нові ігрові режими, систему організації матчів, глобальні таблиці гравців і багато іншого. «Counter-Strike була сюрпризом для ігрової індустрії, коли не особливо вдалий мод став одним з найпопулярніших шутерів в світі відразу ж після його релізу в серпні 1999 року, - говорить Даг Ломбарді з Valve, - за минулі 12 років, вона все ще одна з найпопулярніших в світі ігор, часто з\'являється на ігрових змаганнях і продана в кількості більше 25 мільйонів копій по всьому світу. CS: GO відродив знаменитий ігровий процес Counter-Strike і запропонував його гравцям не тільки на ПК, але і на консолях наступного покоління і комп\'ютерах Mac ». CS: GO розробляється Valve у співпраці з Hidden Path Entertainment.
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">
</p> 
</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.2.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Dota 2</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.2.jpg" alt="about1"/></div> 
	<h3>Dota 2</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.3.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">GTA 5</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.3.jpg" alt="about1"/></div> 
	<h3>GTA 5</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.4.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Dead island</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.4.jpg" alt="about1"/></div> 
	<h3>Dead island</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.5.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Resident Evil 7</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.5.jpg" alt="about1"/></div> 
	<h3>Resident Evil 7</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.6.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Форсаж 8</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.6.jpg" alt="about1"/></div> 
	<h3>Креативні</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
</section>',
    '[[$footer]]' => '<footer>
<hr>
	<div class="container clearfix">
		<div class="blockquote-footer ">
		<div class="two-block col-md-6">
		<div class="mail">
		<a href="raider_yura_1998@mail.ru">raider_yura_1998@mail.ru</a>
		</div>
		<div class="address">м. Чернівці, 59310 с. Киселів, вул.Героїв Майдану, дім 12</div>
		</div>
		<div class="three-block  pull-md-right">
       	<a href="https://vk.com/raider_yura" target="_blank" class="btn-social btn-vk">
        <i class="fa fa-vk"></i></a>
        <a href="https://www.facebook.com/" target="_blank" class="btn-social btn-facebook">
        <i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/ValentynMarusyk" target="_blank" class="btn-social btn-twitter">
        <i class="fa fa-twitter"></i></a>
        <a href="https://plus.google.com/u/0/105071669603249915743" target="_blank" class="btn-social btn-google-plus">
        <i class="fa fa-google-plus"></i></a>
        <a href="https://www.youtube.com/user/MrOwnage669/" target="_blank" class="btn-social btn-youtube">
        <i class="fa fa-youtube"></i></a>
    </div>
		</div>
	</div>
</footer>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'section-1' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'section-1',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '<section id="section-1">
<div class="main">
	<div class="sl">
		<div class="sl__slide">
			<img src="/assets/app/img/sl1.jpg" alt="Picture1" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl2.jpg" alt="Picture2" class="sl__img image-cl">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl3.jpg" alt="Picture3" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl4.jpg" alt="Picture4" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl5.jpg" alt="Picture5" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl6.jpg" alt="Picture6" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl6.jpg" alt="Picture7" class="sl__img">
		</div>
	</div>
	<div class="sl2">
  <div class="sl2__slide"><img src="/assets/app/img/sl1.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl2.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl3.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl4.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl5.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl6.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl7.jpg" alt="omg"></div>
 </div>
 <hr class="green">
</section>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<section id="section-1">
<div class="main">
	<div class="sl">
		<div class="sl__slide">
			<img src="/assets/app/img/sl1.jpg" alt="Picture1" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl2.jpg" alt="Picture2" class="sl__img image-cl">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl3.jpg" alt="Picture3" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl4.jpg" alt="Picture4" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl5.jpg" alt="Picture5" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl6.jpg" alt="Picture6" class="sl__img">
		</div>
		<div class="sl__slide">
			<img src="/assets/app/img/sl6.jpg" alt="Picture7" class="sl__img">
		</div>
	</div>
	<div class="sl2">
  <div class="sl2__slide"><img src="/assets/app/img/sl1.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl2.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl3.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl4.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl5.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl6.jpg" alt="omg"></div>
  <div class="sl2__slide"><img src="/assets/app/img/sl7.jpg" alt="omg"></div>
 </div>
 <hr class="green">
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'section-series' => 
      array (
        'fields' => 
        array (
          'id' => 28,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'section-series',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '<section id="film" name="counter" class="text-md-center text-xs-center text-uppercase wow fadeIn" data-wow-duration="2s" 
 data-wow-delay="0.2s">
 <hr>
		<div class="container clearfix">

		<button class="button-series-1">Серіали</button>	
		<div class="row">
				<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.1.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Острі козирьки</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.1.jpg" alt="about1"/></div> 
	<h3>Острі козирьки</h3> 
<p> 
Британський серіал про кримінальний світ Бірмінгема 20-х років минулого століття, в якому багатолюдна сім\'я Шелбі стала однією з найжорстокіших і впливових гангстерських банд післявоєнного часу. Фірмовим знаком угруповання, що займалася пограбуваннями та азартними іграми, стали зашиті в козирки леза. 
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.2.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content">
	<br> 
	<span class="about-p-name">Гра пристолів</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.2.jpg" alt="about1"/></div> 
	<h3Гра пристолів</h3> 
<p> 
Американський фантастичний телесеріал «Гра престолів» вийшов в прокат в 2011 році і є екранізацією знаменитого циклу романів «Пісня Льоду та полум\'я» письменника Джорджа Р. Р. Мартіна. Команді режисерів вдалося вдало відтворити всю суть книги і розповісти глядачеві неймовірну історію про вигадане казкове середньовіччя, в якому, як і в сучасному світі, є місце боротьбі за владу. Основна частина зйомок проходила в Північній Ірландії. Сучасні технології і екзотичність обстановки дозволяє повною мірою насолодитися подіями. Всього серіал складається з 10 серій. Перегляду кожної серії займе не більш 55 хвилин.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>

	<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.3.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Декстер</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.3.jpg" alt="about1"/></div> 
	<h3>Декстер</h3> 
<p> 
Декстер американський телесеріал каналу Showtime, заснований на романі Джеффрі Ліндсея «Дремлющий демон Декстера» (англ. Darkly Dreaming Dexter, дослівно «Похмурі мрії Декстера») і адаптований для телебачення лауреатом премії «Еммі», сценаристом Джеймсом Маносом-мл., який написав сценарій для пілотного епізоду. Події серіалу розповідають про Декстера Моргана (Майкл Холл), вигаданому серійного вбивцю, що працюють судовим експертом по бризок крові в поліції Маямі. Серіал неодноразово номінувався на різні премії, такі як «Еммі», IGN, Satellite Award і «Сатурн». Також серіал піддавався критиці з боку батьківських організацій (таких як Parents Television Council) як надмірно жорстокий і аморальний.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>

<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.4.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Таббу</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.4.jpg" alt="about1"/></div> 
	<h3>Таббу</h3> 
<p> 
Табу британський драматичний телесеріал, прем\'єра якого відбулася в Великобританії на каналі BBC One, а в США - на каналі FX. Восьмисерійний серіал, створений Томом Гарді, чіпси Харді і Стівеном Найтом, заснований на оповіданні Тома Харді, оповідає про шукачі пригод, успадкованих землю і намагаються отримати монополію на торгівлю з Китаєм [1] [2]. Серіал отримав позитивні відгуки критиків, які особливо відзначили акторську гру Тома Харді
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.5.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Американські боги</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.5.jpg" alt="about1"/></div> 
	<h3>>Американські боги</h3> 
<p> 
Тінь - людина з минулим. Але тепер єдине, чого він хоче - це жити тихим і спокійним життям зі своєю дружиною в стороні від проблем. Поки він не дізнається про її загибелі в результаті нещасного випадку. По дорозі на похорон додому, коли найсильніший шторм стрясає літак, йому видається дивна людина з сусіднього крісла. Він називає себе містер Середовище. І він знає про Тіні більше, ніж здається можливим. Він попереджає Тінь, що гряде ще більший шторм. І ніщо з цього моменту, включаючи його самого, не буде таким, як раніше.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.6.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Доктор Хаус</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 1.2.jpg" alt="about1"/></div> 
	<h3>Доктор Хаус</h3> 
<p> 
Хаус підтримує дружні відносини тільки з доктором Вілсоном, якому вистачає терпіння перебувати поруч зі своїм цинічним іншому, а ось з начальницею Лізою Кадді він дуже часто конфліктує з-за роботи. За наполяганням тієї ж Кадді Хаус набирає собі команду діагностів з трьох фахівців: Формана, в минулому якого проблеми з поліцією, Кемерон - єдиної жінки в команді і хорошому імунолога, а також Чейза, взятого в команду, за словами Хауса, через зв\'язки його батька. Всім трьом доведеться звикати не тільки один до одного, але і до характеру і методам роботи свого начальника.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
</div>
</section>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<section id="film" name="counter" class="text-md-center text-xs-center text-uppercase wow fadeIn" data-wow-duration="2s" 
 data-wow-delay="0.2s">
 <hr>
		<div class="container clearfix">

		<button class="button-series-1">Серіали</button>	
		<div class="row">
				<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.1.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Острі козирьки</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.1.jpg" alt="about1"/></div> 
	<h3>Острі козирьки</h3> 
<p> 
Британський серіал про кримінальний світ Бірмінгема 20-х років минулого століття, в якому багатолюдна сім\'я Шелбі стала однією з найжорстокіших і впливових гангстерських банд післявоєнного часу. Фірмовим знаком угруповання, що займалася пограбуваннями та азартними іграми, стали зашиті в козирки леза. 
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.2.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content">
	<br> 
	<span class="about-p-name">Гра пристолів</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.2.jpg" alt="about1"/></div> 
	<h3Гра пристолів</h3> 
<p> 
Американський фантастичний телесеріал «Гра престолів» вийшов в прокат в 2011 році і є екранізацією знаменитого циклу романів «Пісня Льоду та полум\'я» письменника Джорджа Р. Р. Мартіна. Команді режисерів вдалося вдало відтворити всю суть книги і розповісти глядачеві неймовірну історію про вигадане казкове середньовіччя, в якому, як і в сучасному світі, є місце боротьбі за владу. Основна частина зйомок проходила в Північній Ірландії. Сучасні технології і екзотичність обстановки дозволяє повною мірою насолодитися подіями. Всього серіал складається з 10 серій. Перегляду кожної серії займе не більш 55 хвилин.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>

	<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.3.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Декстер</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.3.jpg" alt="about1"/></div> 
	<h3>Декстер</h3> 
<p> 
Декстер американський телесеріал каналу Showtime, заснований на романі Джеффрі Ліндсея «Дремлющий демон Декстера» (англ. Darkly Dreaming Dexter, дослівно «Похмурі мрії Декстера») і адаптований для телебачення лауреатом премії «Еммі», сценаристом Джеймсом Маносом-мл., який написав сценарій для пілотного епізоду. Події серіалу розповідають про Декстера Моргана (Майкл Холл), вигаданому серійного вбивцю, що працюють судовим експертом по бризок крові в поліції Маямі. Серіал неодноразово номінувався на різні премії, такі як «Еммі», IGN, Satellite Award і «Сатурн». Також серіал піддавався критиці з боку батьківських організацій (таких як Parents Television Council) як надмірно жорстокий і аморальний.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>

<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.4.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Таббу</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.4.jpg" alt="about1"/></div> 
	<h3>Таббу</h3> 
<p> 
Табу британський драматичний телесеріал, прем\'єра якого відбулася в Великобританії на каналі BBC One, а в США - на каналі FX. Восьмисерійний серіал, створений Томом Гарді, чіпси Харді і Стівеном Найтом, заснований на оповіданні Тома Харді, оповідає про шукачі пригод, успадкованих землю і намагаються отримати монополію на торгівлю з Китаєм [1] [2]. Серіал отримав позитивні відгуки критиків, які особливо відзначили акторську гру Тома Харді
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.5.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Американські боги</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 2.5.jpg" alt="about1"/></div> 
	<h3>>Американські боги</h3> 
<p> 
Тінь - людина з минулим. Але тепер єдине, чого він хоче - це жити тихим і спокійним життям зі своєю дружиною в стороні від проблем. Поки він не дізнається про її загибелі в результаті нещасного випадку. По дорозі на похорон додому, коли найсильніший шторм стрясає літак, йому видається дивна людина з сусіднього крісла. Він називає себе містер Середовище. І він знає про Тіні більше, ніж здається можливим. Він попереджає Тінь, що гряде ще більший шторм. І ніщо з цього моменту, включаючи його самого, не буде таким, як раніше.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 2.6.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Доктор Хаус</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 1.2.jpg" alt="about1"/></div> 
	<h3>Доктор Хаус</h3> 
<p> 
Хаус підтримує дружні відносини тільки з доктором Вілсоном, якому вистачає терпіння перебувати поруч зі своїм цинічним іншому, а ось з начальницею Лізою Кадді він дуже часто конфліктує з-за роботи. За наполяганням тієї ж Кадді Хаус набирає собі команду діагностів з трьох фахівців: Формана, в минулому якого проблеми з поліцією, Кемерон - єдиної жінки в команді і хорошому імунолога, а також Чейза, взятого в команду, за словами Хауса, через зв\'язки його батька. Всім трьом доведеться звикати не тільки один до одного, але і до характеру і методам роботи свого начальника.
</p> 
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">

</div> 
</div> 
</div> 
</div>
</div>
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'section-games' => 
      array (
        'fields' => 
        array (
          'id' => 29,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'section-games',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<section id="film" name="counter" class="text-md-center text-xs-center text-uppercase wow fadeIn" data-wow-duration="2s" 
 data-wow-delay="0.2s">
 <hr>
		<div class="container clearfix">
		<button class="button-games-1">Ігри</button>	
		<div class="row">
	<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.1.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">CSGO</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.1.jpg" alt="about1"/></div> 
	<h3>CSGO</h3> 
<p> 
Counter-Strike: Global Offensive (CS: GO) відродив той ураганний командний ігровий процес, вперше представлений ще 16 років тому. CS: GO включає в себе нові карти, персонажів, зброю і їх поліпшені версії з класичної CS (de_dust і т.п.). Крім того, CS: GO містить нові ігрові режими, систему організації матчів, глобальні таблиці гравців і багато іншого. «Counter-Strike була сюрпризом для ігрової індустрії, коли не особливо вдалий мод став одним з найпопулярніших шутерів в світі відразу ж після його релізу в серпні 1999 року, - говорить Даг Ломбарді з Valve, - за минулі 12 років, вона все ще одна з найпопулярніших в світі ігор, часто з\'являється на ігрових змаганнях і продана в кількості більше 25 мільйонів копій по всьому світу. CS: GO відродив знаменитий ігровий процес Counter-Strike і запропонував його гравцям не тільки на ПК, але і на консолях наступного покоління і комп\'ютерах Mac ». CS: GO розробляється Valve у співпраці з Hidden Path Entertainment.
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">
</p> 
</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.2.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Dota 2</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.2.jpg" alt="about1"/></div> 
	<h3>Dota 2</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.3.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">GTA 5</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.3.jpg" alt="about1"/></div> 
	<h3>GTA 5</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.4.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Dead island</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.4.jpg" alt="about1"/></div> 
	<h3>Dead island</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.5.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Resident Evil 7</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.5.jpg" alt="about1"/></div> 
	<h3>Resident Evil 7</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.6.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Форсаж 8</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.6.jpg" alt="about1"/></div> 
	<h3>Креативні</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
</section>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<section id="film" name="counter" class="text-md-center text-xs-center text-uppercase wow fadeIn" data-wow-duration="2s" 
 data-wow-delay="0.2s">
 <hr>
		<div class="container clearfix">
		<button class="button-games-1">Ігри</button>	
		<div class="row">
	<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.1.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">CSGO</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.1.jpg" alt="about1"/></div> 
	<h3>CSGO</h3> 
<p> 
Counter-Strike: Global Offensive (CS: GO) відродив той ураганний командний ігровий процес, вперше представлений ще 16 років тому. CS: GO включає в себе нові карти, персонажів, зброю і їх поліпшені версії з класичної CS (de_dust і т.п.). Крім того, CS: GO містить нові ігрові режими, систему організації матчів, глобальні таблиці гравців і багато іншого. «Counter-Strike була сюрпризом для ігрової індустрії, коли не особливо вдалий мод став одним з найпопулярніших шутерів в світі відразу ж після його релізу в серпні 1999 року, - говорить Даг Ломбарді з Valve, - за минулі 12 років, вона все ще одна з найпопулярніших в світі ігор, часто з\'являється на ігрових змаганнях і продана в кількості більше 25 мільйонів копій по всьому світу. CS: GO відродив знаменитий ігровий процес Counter-Strike і запропонував його гравцям не тільки на ПК, але і на консолях наступного покоління і комп\'ютерах Mac ». CS: GO розробляється Valve у співпраці з Hidden Path Entertainment.
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c">
</p> 
</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.2.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Dota 2</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.2.jpg" alt="about1"/></div> 
	<h3>Dota 2</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.3.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">GTA 5</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.3.jpg" alt="about1"/></div> 
	<h3>GTA 5</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.4.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Dead island</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.4.jpg" alt="about1"/></div> 
	<h3>Dead island</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.5.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Resident Evil 7</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.5.jpg" alt="about1"/></div> 
	<h3>Resident Evil 7</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
<div class="col-md-2 col-sm-6 col-xs-12 about-item"> 
	<div class="about-us-single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s"> 
	<div class="about-us-single-img "> 
	<img src="img/img 3.6.jpg" alt="about1"/> 
	</div> 
	<div class="about-us-single-img-overlay all_overlay "> 
	<a href="#" class="popup_content"> 
	<br> 
	<span class="about-p-name">Форсаж 8</span> 
	</a> 
	</div> 
	<div class="hidden"> 
	<div class="about-descr" > 
	<div class="about-descr-img"> 
	<img src="img/img 3.6.jpg" alt="about1"/></div> 
	<h3>Креативні</h3> 
<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
</p>
<p><a href="<a href="http://raider/app/files/csgo.torrent"><img src="img/download.png" class="img_c"> 

</div> 
</div> 
</div> 
</div>
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 30,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<footer>
<hr>
	<div class="container clearfix">
		<div class="blockquote-footer ">
		<div class="two-block col-md-6">
		<div class="mail">
		<a href="raider_yura_1998@mail.ru">raider_yura_1998@mail.ru</a>
		</div>
		<div class="address">м. Чернівці, 59310 с. Киселів, вул.Героїв Майдану, дім 12</div>
		</div>
		<div class="three-block  pull-md-right">
       	<a href="https://vk.com/raider_yura" target="_blank" class="btn-social btn-vk">
        <i class="fa fa-vk"></i></a>
        <a href="https://www.facebook.com/" target="_blank" class="btn-social btn-facebook">
        <i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/ValentynMarusyk" target="_blank" class="btn-social btn-twitter">
        <i class="fa fa-twitter"></i></a>
        <a href="https://plus.google.com/u/0/105071669603249915743" target="_blank" class="btn-social btn-google-plus">
        <i class="fa fa-google-plus"></i></a>
        <a href="https://www.youtube.com/user/MrOwnage669/" target="_blank" class="btn-social btn-youtube">
        <i class="fa fa-youtube"></i></a>
    </div>
		</div>
	</div>
</footer>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<footer>
<hr>
	<div class="container clearfix">
		<div class="blockquote-footer ">
		<div class="two-block col-md-6">
		<div class="mail">
		<a href="raider_yura_1998@mail.ru">raider_yura_1998@mail.ru</a>
		</div>
		<div class="address">м. Чернівці, 59310 с. Киселів, вул.Героїв Майдану, дім 12</div>
		</div>
		<div class="three-block  pull-md-right">
       	<a href="https://vk.com/raider_yura" target="_blank" class="btn-social btn-vk">
        <i class="fa fa-vk"></i></a>
        <a href="https://www.facebook.com/" target="_blank" class="btn-social btn-facebook">
        <i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/ValentynMarusyk" target="_blank" class="btn-social btn-twitter">
        <i class="fa fa-twitter"></i></a>
        <a href="https://plus.google.com/u/0/105071669603249915743" target="_blank" class="btn-social btn-google-plus">
        <i class="fa fa-google-plus"></i></a>
        <a href="https://www.youtube.com/user/MrOwnage669/" target="_blank" class="btn-social btn-youtube">
        <i class="fa fa-youtube"></i></a>
    </div>
		</div>
	</div>
</footer>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modSnippet' => 
    array (
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);