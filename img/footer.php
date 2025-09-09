
<footer class="footer" id="sect-6">
		<div class="container">
			<div class="footer__block">
				<div class="row">
				<div class="col-lg-4">
								<div class="map-wrap">
									<a href="#" class="map-link" target="_blank"></a>
									<div id="map"></div>
								</div>
							</div>
					<div class="col-lg-8">
						<div class="footer__content">
							<h2 class="title-section">
								<p><?php echo get_field('адрес', 'option'); ?></p>
								<p><a href="tel:+<?php echo preg_replace("/[^0-9]/", '', get_field('телефон', 'option')); ?>"><?php echo get_field('телефон', 'option'); ?></a></p>
								<p><a href="mailto:<?php echo get_field('почта', 'option'); ?>" class="title-mail"><?php echo get_field('почта', 'option'); ?></a></p>
							</h2>
							<div class="row row_footer menu-navigation">
								<div class="col-lg-6">
									<div class="footer__title">навигация</div>
									<ul class="footer__nav">
										<li><a href="#sect-3">Проекты</a></li>
										<li><a href="#sect-4">Технологии</a></li>
										<li><span>Статьи</span></li>
										<li><a href="#modal-policy" class="fancybox">Политика конфиденциальности</a></li>
										<li><a href="#sect-5">Документы</a></li>
										<li><a href="#sect-1">О компании</a></li>
										<li><span>Карьера</span></li>
									</ul>
								</div>
								<div class="col-lg-3 col-6">
									<div class="footer__title">направления</div>
									<ul class="footer__nav">
										<li><span>Проектирование</span></li>
										<li><span>Сметы</span></li>
										<li><span>СМР</span></li>
										<li><span>Разработка ПО</span></li>
										<li><span>ПО СМИС</span></li>
									</ul>
								</div>
								<div class="col-lg-3 col-6">
									<div class="footer__title">технологии</div>
									<ul class="footer__nav">
										<li><span>Сервера</span></li>
										<li><span>Щиты</span></li>
										<li><span>Оборудование</span></li>
									</ul>
								</div>
							</div>
							<div class="footer__bottom">
								<div class="copyright">SIRIUS-SYSTEMS.RU ©<?php echo date('Y'); ?></div>
								<a href="/" class="footer__logo">
									<img src="<?php bloginfo('template_directory'); ?>/img/logo_footer.svg" alt="alt">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

</div>

<div id="modal-projects" class="modal-block">
<?php $projects = get_field('проекты', 2); ?>
<div class="modal-wrap">
	<div class="container">
	
		<div class="head-modal">
			<div class="head-modal__content">
				<h2 class="title-section">Референс-лист</h2>
				<?php if(!empty($projects['файл_референс-лист'])){ ?>
					<a href="<?php echo $projects['файл_референс-лист']['url']; ?>" class="btn-main btn-main_default show-mob" download>СКАЧАТЬ РЕФЕРЕНС-ЛИСТ</a>
				<?php } ?>
				
				<div class="projects-info">
					<p class="projects-info__all">Всего проектов: <?php echo $wp_query->found_posts; ?></p>
					<p>Выбрано: <span class="project_find">0</span></p>
				</div>
				<?php include('filter_block.php'); ?>
				<!-- <ul class="tags tags_main">
					<li><a href="#" class="tags__item">АСОДУ</a></li>
					<li><a href="#" class="tags__item">СМИС</a></li>
					<li><a href="#" class="tags__item">ААИСКУЭ</a></li>
					<li><a href="#" class="tags__item">СМИК</a></li>
					<li><a href="#" class="tags__item">АСУТП</a></li>
					<li><a href="#" class="tags__item">ЭМ</a></li>
					<li><a href="#" class="tags__item">ЭС</a></li>
					<li><a href="#" class="tags__item">СМР</a></li>
					<li><a href="#" class="tags__item">ПРОЕКТИРОВАНИЕ</a></li>
					<li><a href="#" class="tags__item">РАЗРАБОТКА ПО</a></li>
				</ul> -->
			</div>
			<?php if(!empty($projects['файл_референс-лист'])){ ?>
				<a href="<?php echo $projects['файл_референс-лист']['url']; ?>" class="btn-main btn-main_default hidden-mob" download>СКАЧАТЬ РЕФЕРЕНС-ЛИСТ</a>
			<?php } ?>			
		</div>
		<?php 
			$posts = array( 
				'post_type'   => 'project',                 
				'posts_per_page' => 4,
				'orderby' => 'menu_order',
				'order'     => 'ASC',	
					);
			
			$wp_query = new WP_Query($posts);
			if ( $wp_query->have_posts() ) { ?>
		<div id="ajax_content">
			<div class="list-projects">
				<?php while ( $wp_query->have_posts() ) {                  
					$wp_query->the_post(); ?>
					<?php include('inc-project.php'); ?>				
				<?php } ?>	
				<?php  if (  $wp_query->max_num_pages > 1 ) : ?>                     
				<script>
				var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
				var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
				var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
				var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
				</script> 
					
				<div class="true_loadmore-wr catalog__items">                          
					<div id="true_loadmore" class="btn-main btn-simple_more true_loadmore catalog_more"><span>Показать еще</span></div>
				</div>
				<?php endif;  ?>		
			</div>
		</div>
		
        <?php } wp_reset_postdata(); ?>
	</div>
</div>
</div>

<div id="modal-policy" class="modal-block">
<div class="modal-policy">
	<div class="head-policy">
		<div class="container">
			<h2 class="title-section">политика конфиденциальности</h2>
			<div class="info-policy">
				<div class="info-policy__item">
					<div class="info-policy__title">версия документа</div>
					<div class="info-policy__value">1.02</div>
				</div>
				<div class="info-policy__item">
					<div class="info-policy__title">последнее обновление:</div>
					<div class="info-policy__value">11.01.2025</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-policy">
		<div class="container">
			<h2 class="title-section">1.Какие данные мы собираем</h2>
			<p>ООО "СИРИУС" (далее - "мы", "компания") уважает конфиденциальность пользователей и гарантирует защиту предоставленной информации.</p>
			<p>При использовании сайта мы получаем:</p>
			<div class="unit-item">
				<div class="title-small">1. Данные, предоставленные вами:</div>
				<div class="item-list">
					<div class="title-middle">Контактная информация (имя, email, телефон)</div>
					<div class="item-list__content">
						<ul>
							<li>
								<a href="#">2 уровень</a>
								<ul>
									<li><a href="#">3 уровень списка:</a></li>
									<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								</ul>
							</li>
							<li><a href="#">2 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Сведения компании (название, адрес, реквизиты)</div>
					<div class="item-list__content">
						<ul>
							<li>
								<a href="#">2 уровень</a>
								<ul>
									<li><a href="#">3 уровень списка:</a></li>
									<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								</ul>
							</li>
							<li><a href="#">2 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Информация в сообщениях и заявках</div>
					<div class="item-list__content">
						<ul>
							<li>
								<a href="#">2 уровень</a>
								<ul>
									<li><a href="#">3 уровень списка:</a></li>
									<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								</ul>
							</li>
							<li><a href="#">2 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="unit-item">
				<div class="title-small">2. Технические данные:</div>
				<div class="item-list">
					<div class="title-middle">IP-адрес</div>
					<div class="item-list__content">
						<ul>
							<li>
								<a href="#">Тип устройства и браузера</a>
								<ul>
									<li><a href="#">Файлы cookies</a></li>
									<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								</ul>
							</li>
							<li><a href="#">2 пункт элемента списка</a></li>
							<li><a href="#">Элемент списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Тип устройства и браузера</div>
					<div class="item-list__content">
						<ul>
							<li>
								<a href="#">2 уровень</a>
								<ul>
									<li><a href="#">3 уровень списка:</a></li>
									<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								</ul>
							</li>
							<li><a href="#">2 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Файлы cookies</div>
					<div class="item-list__content">
						<ul>
							<li>
								<a href="#">2 уровень</a>
								<ul>
									<li><a href="#">3 уровень списка:</a></li>
									<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								</ul>
							</li>
							<li><a href="#">2 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Данные о взаимодействии с сайтом</div>
					<div class="item-list__content">
						<ul>
							<li>
								<a href="#">2 уровень</a>
								<ul>
									<li><a href="#">3 уровень списка:</a></li>
									<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								</ul>
							</li>
							<li><a href="#">2 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
			</div>
			<h2 class="title-section">2.Как мы используем данные</h2>
			<p>Собранная информация применяется для:</p>
			<div class="unit-item">
				<div class="item-list">
					<div class="title-middle">Обработки ваших запросов</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Заключения и исполнения договоров</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Информирования о услугах и предложениях</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Улучшения работы сайта</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Выполнения требований законодательства</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
			</div>
			<h2 class="title-section">3.Защита информации</h2>
			<p>Мы обеспечиваем:</p>
			<div class="unit-item">
				<div class="item-list">
					<div class="title-middle">Шифрование данных при передаче</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Ограниченный доступ сотрудников к информации</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Регулярное обновление систем безопасности</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Мониторинг несанкционированного доступа</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
			</div>
			<h2 class="title-section">4. Передача данных третьим лицам</h2>
			<p>Мы можем передавать данные:</p>
			<div class="unit-item">
				<div class="item-list">
					<div class="title-middle">Государственным органам по их запросу</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Подрядчикам для исполнения услуг</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Партнерам с вашего согласия</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
			</div>
			<h2 class="title-section">4. Передача данных третьим лицам</h2>
			<p>Мы можем передавать данные:</p>
			<div class="unit-item">
				<div class="item-list">
					<div class="title-middle">Государственным органам по их запросу</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Подрядчикам для исполнения услуг</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Партнерам с вашего согласия</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
			</div>
			<h2 class="title-section">5. Сроки хранения</h2>
			<div class="unit-item">
				<div class="item-list">
					<div class="title-middle">Данные хранятся в течение срока действия договора</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">После прекращения договора - в течение срока, установленного законодательством</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">По вашему запросу данные могут быть удалены, если это не противоречит закону</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
			</div>
			<h2 class="title-section">6. Ваши права</h2>
			<p>Вы имеете право:</p>
			<div class="unit-item">
				<div class="item-list">
					<div class="title-middle">Получить информацию об обработке ваших данных</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Потребовать уточнения или удаления данных</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Отозвать согласие на обработку</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">Обратиться с жалобой в надзорные органы</div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
			</div>
			<h2 class="title-section">7. Изменения политики</h2>
			<p>Мы оставляем за собой право вносить изменения в политику конфиденциальности. Актуальная версия всегда доступна на сайте.</p>
			<h2 class="title-section">8. контакты для обращений</h2>
			<p>По вопросам обработки персональных данных:</p>
			<div class="unit-item">
				<div class="item-list">
					<div class="title-middle"><a href="#" class="link-main">info@sirius-system.ru</a></div>
					<div class="item-list__content">
						<ul>
							<li><a href="#">2 уровень</a></li>
							<li><a href="#">3 пункт элемента списка</a></li>
						</ul>
					</div>
				</div>
				<div class="item-list">
					<div class="title-middle">+7 (812) 640 98 08</div>
				</div>
				<div class="item-list">
					<div class="title-middle">194044, Санкт-Петербург, ул. Менделеевская, д.9, лит.В, офис 201</div>
				</div>
			</div>
			<h2 class="title-section">Скачать документ</h2>
			<div class="row row_docs">
				<div class="col-lg-6">
					<div class="unit-doc">
						<a href="#" class="unit-doc__title">политика конфиденциальности.pdf</a>
						<a href="#" class="unit-doc__link"><img src="<?php bloginfo('template_directory'); ?>/img/download2.svg" alt="alt">Скачать</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="unit-doc">
						<a href="#" class="unit-doc__title">политика конфиденциальности.DOCX</a>
						<a href="#" class="unit-doc__link"><img src="<?php bloginfo('template_directory'); ?>/img/download2.svg" alt="alt">Скачать</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="cookie">
<div class="container">
	<div class="cookie__content">
		<div class="cookie__title">Мы используем cookie файлы! Просматривая этот сайт, <br>вы соглашаетесь с нашей <a href="#modal-policy" class="fancybox">политикой конфиденциальности</a></div>
		<a href="#" class="btn-main">ПРИНИМАЮ</a>
	</div>
</div>
</div>

<div id="modal-single-project" class="modal-block">
		<div class="modal-project">
			<div class="head-project">
				<h2 class="title-section">Флагштоки зенит арена</h2>
				<div class="head-project__line">
					<ul class="tags tags_main">
						<li><a href="#" class="tags__item">ТХ</a></li>
						<li><a href="#" class="tags__item">СЛАБОТОЧНЫЕ СИСТЕМЫ</a></li>
					</ul>
					<div class="head-project__info">
						<div>имя автора</div>
						<div>24.01.2025</div>
					</div>
				</div>
				<div class="image-project">
					<img src="<?php bloginfo('template_directory'); ?>/img/modal_project1.jpg" alt="alt">
				</div>
				<div class="features-project">
					<div class="features-project__item">
						<div class="features-project__title">Местоположение</div>
						<p>Акватория Невской губы Финского залива, парк 300-летия Петербурга</p>
					</div>
					<div class="features-project__item">
						<div class="features-project__title">Заказчик</div>
						<p>АО "Зенит-Арена"  </p>
					</div>
					<div class="features-project__item">
						<div class="features-project__title">отрасль</div>
						<p>Гражданское строительство, инфраструктура</p>
					</div>
					<div class="features-project__item">
						<div class="features-project__title">год</div>
						<p>2019-2025</p>
					</div>
				</div>
			</div>
			<div class="content-project">
				<div class="row">
					<div class="col-lg-7">
						<h2 class="title-section">Описание проекта</h2>
						<p>Уникальный комплекс из трех цилиндрических павильонов с флагштоками высотой 175 метров каждый. Расположенный в акватории Невской губы Финского залива вдоль береговой линии парка 300-летия Петербурга, проект стал новой архитектурной доминантой города. Каждое здание спроектировано в форме разомкнутого кольца с внутренним двором, в центре которого установлен флагшток для подъема флага размером 40×60 метров.</p>
						<p>Конструкция каждого флагштока представляет собой сборную конструкцию из 10-метровых секций с переменным диаметром (от 3900 мм в основании до 1800 мм на высоте 170 м). Фундамент сооружения включает свайное поле глубиной 50 метров, что обеспечивает надежную устойчивость конструкции. Первый торжественный подъем флагов состоялся 17 июня 2023 года, ознаменовав завершение основного этапа строительства.</p>
						<div class="unit-item">
							<div class="title-small">заголовок списка</div>
							<div class="item-list active">
								<div class="title-middle">1 уровень списка</div>
								<div class="item-list__content" style="display: block;">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">2. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">3. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">4. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">5. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
						</div>
						<h2 class="title-section">технологические решения</h2>
						<p>Система управления флагштоками реализована на базе распределенной сети программируемых логических контроллеров с возможностью автономной работы при сбоях верхнего уровня. Для обеспечения надежности внедрено резервирование серверов с автоматическим перераспределением нагрузки, что гарантирует бесперебойную работу всего комплекса.</p>
						<p>Особое внимание уделено системе управления механизмами подъема и поворота. Для передачи электропитания и управляющих сигналов через вращающуюся часть флагштока применена инновационная технология Power Line Communication с использованием изолированных контактных колец. Разработанная система радиоуправления позволяет дистанционно контролировать подъем флага, поворот верхней части флагштока и плавно регулировать скорость работы механизмов.</p>
						<p>Интеграция с существующими инженерными системами реализована через протоколы BACnet и Modbus TCP, что обеспечивает единую систему управления всем комплексом. Многоуровневая система датчиков и специальные алгоритмы гарантируют безопасное функционирование и предотвращают конфликты при управлении с разных источников.</p>
					</div>
				</div>
				<div class="row row_tab">
					<div class="col-lg-7">
						<div class="tab-container-project">
							<div class="tab-pane-project" id="tab_project1_1">
								<img src="<?php bloginfo('template_directory'); ?>/img/tab_project1.jpg" alt="alt">
							</div>
							<div class="tab-pane-project" id="tab_project1_2">
								<img src="<?php bloginfo('template_directory'); ?>/img/tab_project1.jpg" alt="alt">
							</div>
							<div class="tab-pane-project" id="tab_project1_3">
								<img src="<?php bloginfo('template_directory'); ?>/img/tab_project1.jpg" alt="alt">
							</div>
							<div class="tab-pane-project" id="tab_project1_4">
								<img src="<?php bloginfo('template_directory'); ?>/img/tab_project1.jpg" alt="alt">
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<ul class="tabs-project">
							<li class="active"><a href="#tab_project1_1">Система подъёма и спуска флагов</a></li>
							<li><a href="#tab_project1_2">Вспомогательные механизмы обслуживания</a></li>
							<li><a href="#tab_project1_3">Автоматизированная система управления</a></li>
							<li><a href="#tab_project1_4">Технологические решения: сборщик флага, подъемные механизмы, опорно- поворотное устройство, пневматическая остановка демпфера, помошник подъёма</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-7">
						<h2 class="title-section">Системы мониторинга</h2>
						<p>Разработана комплексная система мониторинга, охватывающая все критические элементы конструкции. В свайное поле интегрирована сеть тензометрических датчиков, установленных перед погружением свай, что позволяет контролировать напряжения по двум осям. Для контроля состояния самой конструкции флагштока на каждые два сегмента установлен инклинометр-акселерометр (всего 9 штук на каждый флагшток), отслеживающий колебания и изменения кривизны конструкции.</p>
						<p>На стыках секций размещены струнные наварные тензометрические датчики, контролирующие целостность болтовых соединений. Три динамических гасителя колебаний, оснащенные специальными акселерометрами, обеспечивают стабильность конструкции при ветровых нагрузках. На втором флагштоке на высоте 175 метров установлена метеостанция для мониторинга погодных условий.</p>
						<p>На этапе строительства использовалась временная система мониторинга с автономным акселерометром, передающим данные через интернет, что позволяло непрерывно следить за состоянием конструкции в процессе монтажа.</p>
						<div class="unit-item">
							<div class="title-small">заголовок списка</div>
							<div class="item-list active">
								<div class="title-middle">1 уровень списка</div>
								<div class="item-list__content" style="display: block;">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">2. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">3. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">4. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">5. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
						</div>
						<h2 class="title-section">технологические решения</h2>
						<p>Система управления флагштоками реализована на базе распределенной сети программируемых логических контроллеров с возможностью автономной работы при сбоях верхнего уровня. Для обеспечения надежности внедрено резервирование серверов с автоматическим перераспределением нагрузки, что гарантирует бесперебойную работу всего комплекса.</p>
						<p>Особое внимание уделено системе управления механизмами подъема и поворота. Для передачи электропитания и управляющих сигналов через вращающуюся часть флагштока применена инновационная технология Power Line Communication с использованием изолированных контактных колец. Разработанная система радиоуправления позволяет дистанционно контролировать подъем флага, поворот верхней части флагштока и плавно регулировать скорость работы механизмов.</p>
						<p>Интеграция с существующими инженерными системами реализована через протоколы BACnet и Modbus TCP, что обеспечивает единую систему управления всем комплексом. Многоуровневая система датчиков и специальные алгоритмы гарантируют безопасное функционирование и предотвращают конфликты при управлении с разных источников.</p>
					</div>
				</div>
				<div class="row row_tab">
					<div class="col-lg-7">
						<div class="tab-container-project">
							<div class="tab-pane-project" id="tab_project2_1">
								<img src="<?php bloginfo('template_directory'); ?>/img/tab_project2.jpg" alt="alt">
							</div>
							<div class="tab-pane-project" id="tab_project2_2">
								<img src="<?php bloginfo('template_directory'); ?>/img/tab_project2.jpg" alt="alt">
							</div>
							<div class="tab-pane-project" id="tab_project2_3">
								<img src="<?php bloginfo('template_directory'); ?>/img/tab_project2.jpg" alt="alt">
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<ul class="tabs-project">
							<li class="active"><a href="#tab_project2_1">Структурированная система мониторинга инженерных систем (СМИС)</a></li>
							<li><a href="#tab_project2_2">Подсистема мониторинга инженерных конструкций (СМИК)</a></li>
							<li><a href="#tab_project2_3">Автоматизированная система диспетчеризации</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-7">
						<h2 class="title-section">преимущества для заказчика</h2>
						<p>Реализованный проект обеспечил комплексное управление всеми инженерными системами объекта с централизованным сбором данных и автоматическим оповещением о нештатных ситуациях. Многоуровневая система мониторинга позволяет выявлять потенциальные проблемы на ранней стадии, что существенно повышает безопасность эксплуатации и продлевает срок службы конструкций.</p>
						<p>Внедренная автоматизация процессов и оптимизация энергопотребления значительно снизили эксплуатационные расходы. Возможность удаленного управления и оперативного информирования о событиях повысила эффективность работы объекта. Особое внимание уделено контролю технического состояния конструкций, что позволяет принимать обоснованные решения о необходимости обследования и обслуживания.</p>
						<div class="unit-item">
							<div class="title-small">заголовок списка</div>
							<div class="item-list active">
								<div class="title-middle">1 уровень списка</div>
								<div class="item-list__content" style="display: block;">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">2. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">3. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">4. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">5. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="unit-item">
							<div class="title-small">заголовок списка</div>
							<div class="item-list active">
								<div class="title-middle">1 уровень списка</div>
								<div class="item-list__content" style="display: block;">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">2. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">3. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">4. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
							<div class="item-list">
								<div class="title-middle">5. Элемент списка</div>
								<div class="item-list__content">
									<ul>
										<li>
											<strong>2 уровень:</strong>
											<ul>
												<li>- 3 уровень списка:</li>
												<li>Lorem ipsum dolor sit amet.</li>
											</ul>
										</li>
										<li><strong>2 пункт элемента списка</strong></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="project-numbers">
					<div class="row">
						<div class="col-lg-4">
							<div class="project-numbers__value">3</div>
							<p>3 уникальных гидротехнических сооружения</p>
						</div>
						<div class="col-lg-4">
							<div class="project-numbers__value">179,5</div>
							<p>метров — высота флагштока</p>
						</div>
						<div class="col-lg-4">
							<div class="project-numbers__value">547</div>
							<p>килограммов — вес каждого флага</p>
						</div>
					</div>
				</div>
				<div class="quote-project">
					<div class="quote-project__text">
						<p>На каждом совещании от технического директора АО Зенит-Арена" приходилось слышать: Ребята, привыкайте. Это уникальный объект. И решения, соответственно, будут уникальными. Везде было непросто, но осознание того, что это уникальный объект добавляло сил. Шаг за шагом появлялась уверенность в своих возможностях. </p>
					</div>
					<div class="title-middle">Магденко А.Д.</div>
					<div class="title-small">Руководитель проекта</div>
				</div>
				<div class="quote-project hidden-mob">
					<div class="quote-project__text">
						<p>Отдельную благодарность хочется выразить <br>коллективу строительного департамента <br>и службе эксплуатации ЗАО «Зенит-Арена» <br>за совместную и слаженную работу. <br>Это подготовленные ребята, <br>1 Система подъёма и спуска флагов <br>профессионалы своего дела с золотыми руками, светлыми головами, силой воли и силой духа, готовые всегда прийти на помощь. Без их участия процесс работы был бы невозможен. </p>
					</div>
					<div class="title-middle">Невзоров А.Н.</div>
					<div class="title-small">Руководитель проекта</div>
				</div>
				<h2 class="title-section">ссылки на материалы</h2>
				<div class="row row_docs">
					<div class="col-lg-6">
						<div class="unit-doc">
							<a href="#" class="unit-doc__title">ссылки на материалы</a>
							<a href="#" class="unit-doc__link"><img src="<?php bloginfo('template_directory'); ?>/img/download2.svg" alt="alt">перейти</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="unit-doc">
							<a href="#" class="unit-doc__title">газпром</a>
							<a href="#" class="unit-doc__link"><img src="<?php bloginfo('template_directory'); ?>/img/download2.svg" alt="alt">перейти</a>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-project">
				<h2 class="title-section">другие проекты</h2>
				<div class="row row_projects">
					<div class="col-xl-6 col-md-4">
						<div class="item-project">
							<div class="item-project__image">
								<img src="<?php bloginfo('template_directory'); ?>/img/project4.jpg" alt="alt">
								<div class="item-project__link">
									<a href="#modal-single-project" class="fancybox">Детали проекта →</a>
								</div>
							</div>
							<a href="#" class="item-project__title">ялтинский гидротоннель</a>
							<div class="item-project__text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
							</div>
							<div class="item-project__info">
								<div class="item-project__year">2019-2023</div>
								<ul class="list-categories">
									<li><a href="#">проектирование</a></li>
								</ul>
							</div>
							<ul class="tags tags_main">
								<li><a href="#" class="tags__item">СМИС</a></li>
								<li><a href="#" class="tags__item">СМИК</a></li>
								<li><a href="#" class="tags__item">АИИСКУЭ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-6 col-md-4">
						<div class="item-project">
							<div class="item-project__image">
								<img src="<?php bloginfo('template_directory'); ?>/img/project2.jpg" alt="alt">
								<div class="item-project__link">
									<a href="#modal-single-project" class="fancybox">Детали проекта →</a>
								</div>
							</div>
							<a href="#" class="item-project__title">Бухта Север</a>
							<div class="item-project__text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
							</div>
							<div class="item-project__info">
								<div class="item-project__year">2019-2023</div>
								<ul class="list-categories">
									<li><a href="#">проектирование</a></li>
								</ul>
							</div>
							<ul class="tags tags_main">
								<li><a href="#" class="tags__item">АСОДУ</a></li>
								<li><a href="#" class="tags__item">СМИС</a></li>
								<li><a href="#" class="tags__item">СМР</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->
<script src="<?php bloginfo('template_directory'); ?>/libs/jquery/jquery-3.6.0.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/libs/fancybox-master/dist/jquery.fancybox.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/libs/slick-1.5.9/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/libs/scroll2id/PageScroll2id.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/libs/mask/jquery.maskedinput.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/common.js?ver=1.10"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<script>
	$(document).ready(function() {
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map('map', {
            center: [59.976322, 30.366263],
            zoom: 17,
            controls: [] // Убираем все элементы управления
        });

        var myPlacemark = new ymaps.Placemark([59.976322, 30.366263], {}, {});

        myMap.behaviors.disable('scrollZoom');
        myMap.geoObjects.add(myPlacemark);
    }
});

</script>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->


<?php wp_footer(); ?>

</body>
</html>
