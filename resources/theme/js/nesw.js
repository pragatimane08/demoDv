document.addEventListener("DOMContentLoaded", () => {
    const newsContainer = document.getElementById('news');

    // Sample data - replace this with actual API calls to fetch live news
    const sampleNews = [
        {
            title: "Stock Market Today: Latest Updates",
            description: "The stock market showed significant gains...",
            url: "#"
        },
        {
            title: "Gold Prices Rise Amidst Global Uncertainty",
            description: "Gold prices have seen a sharp rise as investors seek safe havens...",
            url: "#"
        },
        {
            title: "Cryptocurrency News: Bitcoin Reaches New Highs",
            description: "Bitcoin surged to new heights today as major companies...",
            url: "#"
        }
    ];

    // Function to render news articles
    function renderNews(newsArray) {
        newsArray.forEach(news => {
            const newsItem = document.createElement('div');
            newsItem.className = 'news-item';
            newsItem.innerHTML = `
                <h3>${news.title}</h3>
                <p>${news.description}</p>
                <a href="${news.url}" target="_blank">Read more</a>
            `;
            newsContainer.appendChild(newsItem);
        });
    }

    // Load sample news
    renderNews(sampleNews);

    // To fetch live news, use fetch() or Axios with a news API here
});
