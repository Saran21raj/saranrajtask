import "./App.css";
import PriceCart from "./components/Pricecart";

function App()
{
  return (
    <div className="card-container">
      <PriceCart
        cardType="Free"
        price="0"
        users="Single User"
        storage="5GB Storage"
        private={false}
        support={false}
        domain={false}
        report={false}
      />
      <PriceCart
        cardType="Plus"
        price="9"
        users="5 Users"
        storage="50GB Storage"
        private={true}
        support={true}
        domain={true}
        report={false}
      />
      <PriceCart
        cardType="Pro"
        price="49"
        users="Unlimited Users"
        storage="150GB Storage"
        private={true}
        support={true}
        domain="Unlimited"
        report={true}
      />
    </div>
  );
}

export default App;