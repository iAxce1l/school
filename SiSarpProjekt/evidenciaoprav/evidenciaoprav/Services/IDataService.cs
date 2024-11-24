using System.Collections.Generic;
using evidenciaoprav.Models;

namespace evidenciaoprav.Services
{
    public interface IDataService
    {
        List<Car> GetAllCars();
        Car GetCarById(int id);
        void AddCar(Car car);
        void UpdateCar(Car car);
        void DeleteCar(int id);
    }
}