document.addEventListener('DOMContentLoaded', function() {
    const starsContainers = document.querySelectorAll('.rating-stars');
    
    starsContainers.forEach(container => {
        const stars = container.querySelectorAll('.star');
        const inputId = container.getAttribute('data-input-id');
        const inputElement = document.getElementById(inputId);
        
        stars.forEach(star => {
            star.addEventListener('click', function() {
                const value = this.getAttribute('data-value');
                
                // Устанавливаем значение в соответствующее поле ввода
                inputElement.value = value;
                
                // Обновляем цвет звезд в зависимости от выбранного значения
                stars.forEach(s => {
                    s.style.color = s.getAttribute('data-value') <= value ? '#f39c12' : '#ccc';
                });
            });
        });
    });
});