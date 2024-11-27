// Replace the "demo" apikey below with your own key from https://www.alphavantage.co/support/#api-key
const apiKey = 'your-api-key-here'; // Replace with your actual API key
const symbol = 'IBM'; // You can change the symbol to the stock you want to track
const url = `https://www.alphavantage.co/query?function=INCOME_STATEMENT&symbol=${symbol}&apikey=${apiKey}`;

fetch(url)
    .then(response => response.json())
    .then(data => {
        console.log(data); // You can inspect the data structure in your browser console

        // Example: Displaying the annual report data
        const annualReports = data.annualReports;
        let content = '';

        annualReports.forEach(report => {
            content += `
                <div>
                    <h2>Fiscal Year: ${report.fiscalDateEnding}</h2>
                    <p>Total Revenue: ${report.totalRevenue}</p>
                    <p>Net Income: ${report.netIncome}</p>
                    <!-- You can add more data fields as needed -->
                </div>
            `;
        });

        document.getElementById('market-data').innerHTML = content;
    })
    .catch(error => {
        console.error('Error fetching data:', error);
        document.getElementById('market-data').textContent = 'Error loading data.';
    });
