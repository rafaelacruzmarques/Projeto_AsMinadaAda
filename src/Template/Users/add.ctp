<section id="gallery" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/2.jpg);">
    <div class="wrapsection">
        <div class="parallax-overlay" style="background-color: rgba(204,38,73,1);opacity:0.91;"></div>
        <div class="container">
            <div class="row">
                <div class="users form">
                    <legend style="color: #fff;"><?= __('Por favor informe os dados abaixo para realizar o cadastro') ?></legend>
                    <?php

                        echo $this->Form->create($user, ['class' => 'form-evento datepicker']);
                        echo $this->Form->input('name', [
                            'label' => 'Nome',
                            'class' => 'form-control input-md'
                        ]);
                        echo $this->Form->input('profession', [
                            'label' => 'Profissão',
                            'class' => 'form-control input-md'
                        ]);
                        echo $this->Form->input('email', [
                            'label' => 'Email',
                            'class' => 'form-control input-md'
                        ]);
                        echo $this->Form->input('password', [
                            'label' => 'Senha',
                            'class' => 'form-control input-md'
                        ]);
                        echo "<div class='input text required' ><label for='select'>Sexo</label>";
                        echo $this->Form->text('sex', [
                            'type' => 'select',
                            'options' => [''=>'','f' => 'Feminino','m'=>'Masculino'],
                            'label' => 'Sexo',
                            'class' => 'form-control input-md'
                        ]);
                        echo "<div class='input text required' ><label for='select'>Usuário</label>";
                        echo $this->Form->text('role', [
                            'type' => 'select',
                            'options' => ['admin' => 'Admin'],
                            'label' => 'Usuário',
                            'class' => 'form-control input-md'
                        ]);
                        echo $this->Form->button(__('Cadastrar'), ['class' => 'btn btn-primary','style'=>'margin-top:10px;width:100%;background-color:rgba(0,62,79,0.9);']);
                        echo $this->Form->end();

                    ?>
                </div>
            </div>
    </div>

</section>
