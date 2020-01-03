<section id="about" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/1.jpg);">
 <div class="wrapsection">
    <div class="parallax-overlay" style="background-color: #01b0d1;opacity:0.9;"></div>
    <div class="container">
        <div class="row">
        <h1 style="text-align:center; widht:100%;"> Eventos</h1>
             <div class="col-md-4 col-md-6">

            <div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <?= $this->Html->link($this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-plus','style'=>'font-size: 9em; margin-top:60px;')), array( 'action' => 'add'), array('escape' => false)) ?>
            </div>
            </div>

            <?php foreach ($events as $event): ?>
                <div class="col-md-4 col-md-6">
        				 <div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                            <h3 style="text-transform:uppercase; font-size:1.3em; margin-top:40px;"> <?= $this->Html->link($event->name, ['action' => 'view', $event->id]) ?></h3>

                                <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->
                                <p>
                                    <ul>

                                        <li>
                                            <strong>Local:</strong>
                                            <?= $this->Html->link($event->local, ['action' => 'view', $event->id_event]) ?>
                                        </li>
                                        <li>
                                            <strong>Data:</strong>
                                            <?= $event->date->i18nFormat('dd-MM-yyyy') ?>
                                        </li>
                                        <li>
                                            <strong>Hora:</strong>
                                            <?= $event->hour->i18nFormat('HH:mm') ?>
                                         </li>
                                         <li>
                                            <strong>Descrição:</strong><?= $event->description?></li>
                                          <li>
                                            <?= $this->Html->link($this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-edit','style'=>'font-size: 1.3em; color:#000;margin-top:10px; ')), array( 'action' => 'edit', $event->id), array('escape' => false)) ?>
                                          </li>
                                          <li>


                                            <?= $this->Form->postLink(
                                                            'Deletar',
                                                            ['action' => 'delete', $event->id],
                                                            ['confirm' => 'Tem certeza?'])
                                                        ?>
                                          </li>
                                    </ul>
                                    </p>
                        </div>

        		</div>
                <?php endforeach; ?>

            </div>

    </div>
 </div>
</section>
