<section id="about" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/1.jpg);">
 <div class="wrapsection">
    <div class="parallax-overlay" style="background-color: #01b0d1;opacity:0.9;"></div>
    <div class="container">
        <div class="row">
            <h1 style="text-align:center; widht:100%;"> Vagas de Emprego</h1>
             <div class="col-md-4 col-md-6">
            <div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <?= $this->Html->link($this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-plus','style'=>'font-size: 9em; margin-top:60px;')), array( 'action' => 'add'), array('escape' => false)) ?>
            </div>
            </div>

            <?php foreach ($works as $work): ?>
                <div class="col-md-4 col-md-6">
        			<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <h3 style="text-transform:uppercase; font-size:1.3em; margin-top:40px;"> <?= $this->Html->link($work->job, ['action' => 'view', $work->id]) ?></h3>
                            <p>
                                <ul>

                                    <li>
                                        <strong>Empresa:</strong>
                                        <?= $work->company?>
                                    </li>
                                    <li>
                                        <strong>Descrição da Vaga:</strong>
                                        <?= $work->description?>
                                    </li>
                                    <li>
                                        <strong>Endereço da empresa:</strong>
                                        <?= $work->address?>
                                    </li>
                                    <li>
                                        <strong>Número de Vagas:</strong>
                                        <?= $work->jobs?>
                                    </li>
                                    <li>
                                        <strong>Contato:</strong>
                                        <?= $work->contact?>
                                    </li>
                                        <?= $this->Html->link($this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-edit','style'=>'font-size: 1.3em; color:#000;margin-top:10px; ')), array( 'action' => 'edit', $work->id), array('escape' => false)) ?>
                                    </li>
                                    <li>
                                        <?= $this->Form->postLink(
                                                        'Deletar',
                                                        ['action' => 'delete', $work->id],
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