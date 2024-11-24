using System;

namespace evidenciaoprav.Models
{
    public class Car
    {
        public int Id { get; set; }
        public string Brand { get; set; }
        public string Model { get; set; }
        public string LicensePlate { get; set; }
        public int Year { get; set; }
        public string Color { get; set; }
        public string VIN { get; set; }
        public DateTime RegistrationDate { get; set; }
        public DateTime LastInspectionDate { get; set; }
        public string OwnerName { get; set; }
        public string OwnerContact { get; set; }
    }
}