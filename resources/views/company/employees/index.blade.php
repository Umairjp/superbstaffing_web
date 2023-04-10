@extends('layouts.app')

@section('content')
    <section class="section-padding">
        <div class="custom-dsb mb-30">
            <h1 class="banner-heading">Employees</h1>
            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
                +Add Employee
            </button>
        </div>

        <div class="employees-table">
            <table>
                <tr>
                    <th>Employees Name</th>
                    <th>Designation</th>
                    <th>Start & End Date</th>
                    <th>Salary Status</th>
                    <th>Job Status</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>John Doe</td>
                    <td>Lpn- Inpatient Nursing</td>
                    <td>01-01-2022 | 31-01-2022</td>
                    <td>$25/ Hr - Bonus $10</td>
                    <td>
                        <ul class="nav-menu job-status">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="nav-menu action">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Lpn- Inpatient Nursing</td>
                    <td>01-01-2022 | 31-01-2022</td>
                    <td>$25/ Hr - Bonus $10</td>
                    <td>
                        <ul class="nav-menu job-status">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="nav-menu action">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Lpn- Inpatient Nursing</td>
                    <td>01-01-2022 | 31-01-2022</td>
                    <td>$25/ Hr - Bonus $10</td>
                    <td>
                        <ul class="nav-menu job-status">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="nav-menu action">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Lpn- Inpatient Nursing</td>
                    <td>01-01-2022 | 31-01-2022</td>
                    <td>$25/ Hr - Bonus $10</td>
                    <td>
                        <ul class="nav-menu job-status">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="nav-menu action">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Lpn- Inpatient Nursing</td>
                    <td>01-01-2022 | 31-01-2022</td>
                    <td>$25/ Hr - Bonus $10</td>
                    <td>
                        <ul class="nav-menu job-status">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="nav-menu action">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Lpn- Inpatient Nursing</td>
                    <td>01-01-2022 | 31-01-2022</td>
                    <td>$25/ Hr - Bonus $10</td>
                    <td>
                        <ul class="nav-menu job-status">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="nav-menu action">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Lpn- Inpatient Nursing</td>
                    <td>01-01-2022 | 31-01-2022</td>
                    <td>$25/ Hr - Bonus $10</td>
                    <td>
                        <ul class="nav-menu job-status">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="nav-menu action">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Lpn- Inpatient Nursing</td>
                    <td>01-01-2022 | 31-01-2022</td>
                    <td>$25/ Hr - Bonus $10</td>
                    <td>
                        <ul class="nav-menu job-status">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="nav-menu action">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Lpn- Inpatient Nursing</td>
                    <td>01-01-2022 | 31-01-2022</td>
                    <td>$25/ Hr - Bonus $10</td>
                    <td>
                        <ul class="nav-menu job-status">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="nav-menu action">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Lpn- Inpatient Nursing</td>
                    <td>01-01-2022 | 31-01-2022</td>
                    <td>$25/ Hr - Bonus $10</td>
                    <td>
                        <ul class="nav-menu job-status">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="nav-menu action">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Lpn- Inpatient Nursing</td>
                    <td>01-01-2022 | 31-01-2022</td>
                    <td>$25/ Hr - Bonus $10</td>
                    <td>
                        <ul class="nav-menu job-status">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Open</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="nav-menu action">
                            <li class="nav-item dropdown account-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            <a href="#" class="btn btn-primary btn-md">Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>

    </section>
@endsection
