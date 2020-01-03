<section id="gallery" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/2.jpg);">
    <div class="wrapsection">
        <div class="parallax-overlay" style="background-color: rgba(204,38,73,1);opacity:0.91;"></div>
        <div class="container">
            <div class="row">
                <div class="users form">
                    <?= $this->Flash->render('auth') ?>
                    <?= $this->Form->create('',['class' => 'form-evento datepicker']) ?>
                    <fieldset>
                        <legend style="color: #fff;"><?= __('Por favor informe seu email e senha') ?></legend>
                        <?= $this->Form->input('email',[
                            'label' => 'Email',
                            'class' => 'form-control input-md'
                        ]) ?>
                        <?= $this->Form->input('password',[
                            'label' => 'Senha',
                            'class' => 'form-control input-md'
                        ]) ?>
                    </fieldset>
                    <?= $this->Form->button(__('Login'),['class' => 'btn btn-primary','style'=>'margin-top:10px;width:100%;background-color:rgba(0,62,79,0.9);']); ?>
                    <p style="text-align:center;margin-top:20px; font-size: 1em; ">Não possui uma conta?<?=$this->Html->link('Cadastre-se', ['controller' => 'users','action' => 'add','style'=>'color:rgba(0,62,79,1);']);  ?></p>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>

</section>


