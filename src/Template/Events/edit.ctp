<section id="about" class="parallax section" style="background-color: #000">
    <div class="wrapsection">
        <div class="parallax-overlay" style="background-color: #01b0d1;opacity:0.9; color: #000;"></div>
        <div class="container">
            <div class="row">
                <h1 style="color: #ffffff; text-align: center;">Adicionar Evento</h1>
                <?php
                echo $this->Form->create($event, ['class' => 'form-evento datepicker']);
                echo $this->Form->input('name', [
                    'label' => 'Nome do evento',
                    'class' => 'form-control input-md'
                ]);
                echo $this->Form->input('local', [
                    'label' => 'Local do evento',
                    'class' => 'form-control input-md'
                ]);


                echo "<div class='input text required' ><label for='date'>Data do evento</label>";
                echo $this->Form->text('date', [
                    'type' => 'date',
                    'monthNames' => false,
                    'minYear' => date('Y'),
                    'label' => 'Data',
                    'class' => 'form-control input-md'
                ]);
                echo '</div>';


                echo "<div class='input text required' ><label for='hour'>Horário do evento</label>";
                echo $this->Form->text('hour', [
                    'type' => 'time',
                    'label' => 'Horário',
                    'interval' => 10,
                    'class' => 'form-control  input-md'
                ]);
                echo '</div>';


                echo $this->Form->input('description', [
                    'label' => 'Descrição',
                    'class' => 'form-control input-md'
                ]);
                echo $this->Form->button(__('Salvar evento'), ['class' => 'btn btn-primary']);
                echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
</section>