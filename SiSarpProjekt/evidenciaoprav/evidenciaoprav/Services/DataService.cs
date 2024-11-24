using System.Collections.Generic;
using System.Linq;
using evidenciaoprav.Models;

namespace evidenciaoprav.Services
{
    public class DataService : IDataService
    {
        private List<Car> _cars;

        public DataService()
        {
            _cars = new List<Car>();
        }

        public List<Car> GetAllCars()
        {
            return _cars.ToList();
        }

        public Car GetCarById(int id)
        {
            return _cars.FirstOrDefault(c => c.Id == id);
        }

        public void AddCar(Car car)
        {
            car.Id = _cars.Count > 0 ? _cars.Max(c => c.Id) + 1 : 1;
            _cars.Add(car);
        }

        public void UpdateCar(Car car)
        {
            var existingCar = _cars.FirstOrDefault(c => c.Id == car.Id);
            if (existingCar != null)
            {
                var index = _cars.IndexOf(existingCar);
                _cars[index] = car;
            }
        }

        public void DeleteCar(int id)
        {
            var car = _cars.FirstOrDefault(c => c.Id == id);
            if (car != null)
            {
                _cars.Remove(car);
            }
        }
    }
}