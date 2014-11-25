<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title">Estados</div>
            </div>
            <div class="bootstrap-admin-panel-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Período</th>
                            <th>Registrado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($periodoAcademicos as $periodoAcademico): ?>
                            <tr>
                                    <td><?php echo h($periodoAcademico['PeriodoAcademico']['periodo']); ?>&nbsp;</td>
                                    <td><?php echo h($periodoAcademico['PeriodoAcademico']['created']); ?>&nbsp;</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>