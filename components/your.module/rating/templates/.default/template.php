<div id="rating-component">
    <h3>Оценка обращения №<?= htmlspecialchars($arParams['APPEAL_ID']) ?></h3>
    
    <form id="rating-form" method="post">
        <?= bitrix_sessid_post() ?>
        
        <div>
            <label for="operator">Взаимодействие с оператором:</label>
            <div class="rating-stars" data-input-id="operator-rating">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="5">&#9733;</span>
            </div>
            <input type="number" name="operator" id="operator-rating" min="1" max="5" required>
        </div>
        
        <div>
            <label for="politeness">Вежливость:</label>
            <div class="rating-stars" data-input-id="politeness-rating">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="5">&#9733;</span>
            </div>
            <input type="number" name="politeness" id="politeness-rating" min="1" max="5" required>
        </div>
        
        <div>
            <label for="speed">Быстрота и правильность ответов:</label>
            <div class="rating-stars" data-input-id="speed-rating">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="5">&#9733;</span>
            </div>
            <input type="number" name="speed" id="speed-rating" min="1" max="5" required>
        </div>
        
        <input type="submit" value="Оценить">
    </form>
</div>

<script src="<?= $templateFolder ?>/script.js"></script>
