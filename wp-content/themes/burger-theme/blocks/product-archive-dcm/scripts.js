(() => {
    const archives = document.querySelectorAll('.dcm-catalog-archive');

    archives.forEach((archive) => {
        const grid = archive.querySelector('.dcm-catalog-grid');
        const cards = Array.from(archive.querySelectorAll('.dcm-catalog-card'));
        const filters = Array.from(archive.querySelectorAll('[data-dcm-filter]'));
        const search = archive.querySelector('[data-dcm-search]');
        const sort = archive.querySelector('[data-dcm-sort]');
        const result = archive.querySelector('[data-dcm-results]');
        const empty = archive.querySelector('[data-dcm-empty]');
        let activeFilter = 'all';

        const normalize = (value) => (value || '')
            .toLocaleLowerCase('es')
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '');

        const render = () => {
            const query = normalize(search.value.trim());
            let visible = 0;

            cards.forEach((card) => {
                const matchesFilter = activeFilter === 'all' || card.dataset.dcmCategory === activeFilter;
                const matchesSearch = !query || normalize(card.dataset.dcmSearchText).includes(query);
                const show = matchesFilter && matchesSearch;
                card.hidden = !show;
                if (show) visible += 1;
            });

            result.textContent = String(visible).padStart(2, '0');
            empty.hidden = visible !== 0;
        };

        filters.forEach((button) => {
            button.addEventListener('click', () => {
                activeFilter = button.dataset.dcmFilter;
                filters.forEach((item) => item.classList.toggle('is-active', item === button));
                render();
            });
        });

        search.addEventListener('input', render);
        sort.addEventListener('change', () => {
            const direction = sort.value;
            const ordered = [...cards].sort((a, b) => {
                if (direction === 'default') {
                    return cards.indexOf(a) - cards.indexOf(b);
                }
                const comparison = a.dataset.dcmTitle.localeCompare(b.dataset.dcmTitle, 'es');
                return direction === 'az' ? comparison : -comparison;
            });
            ordered.forEach((card) => grid.appendChild(card));
        });
    });
})();
