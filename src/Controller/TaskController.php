<?php

namespace App\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends AbstractController
{
    /**
     * @Route("/tasks", name="task_list")
     */
    public function listTasks()
    {
        // return $this->render('task/list.html.twig', ['tasks' => $this->getDoctrine()->getRepository('AppBundle:Task')->findAll()]);
    }

    /**
     * @Route("/tasks/create", name="task_create")
     */
    public function createTask(Request $request)
    {
        // $user = $this->getUser();
        // $task = new Task();
        // $form = $this->createForm(TaskType::class, $task);

        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     $em = $this->getDoctrine()->getManager();
        //     $task->setUser($user);
        //     $em->persist($task);
        //     $em->flush();

        //     $this->addFlash('success', 'La tâche a été bien été ajoutée.');

        //     return $this->redirectToRoute('task_list');
        // }

        // return $this->render('task/create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/tasks/{id}/edit", name="task_edit")
     */
    public function editTask(/*Task $task, */Request $request)
    {
        // $form = $this->createForm(TaskType::class, $task);

        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     if ($this->getUser() === $task->getUser()) {
        //         $this->getDoctrine()->getManager()->flush();

        //         $this->addFlash('success', 'La tâche a bien été modifiée.');

        //         return $this->redirectToRoute('task_list');
        //     }
        //     $this->addFlash('error', 'La tâche ne vous appartient pas.');

        //     return $this->redirectToRoute('task_list');
        // }

        // return $this->render('task/edit.html.twig', [
        //     'form' => $form->createView(),
        //     'task' => $task,
        // ]);
    }

    /**
     * @Route("/tasks/{id}/toggle", name="task_toggle")
     */
    public function toggleTask(/*Task $task*/)
    {
        // $task->toggle(!$task->isDone());
        // $this->getDoctrine()->getManager()->flush();

        // $this->addFlash('success', sprintf('La tâche %s a bien été marquée comme faite.', $task->getTitle()));

        // return $this->redirectToRoute('task_list');
    }

    /**
     * @Route("/tasks/{id}/delete", name="task_delete")
     */
    public function deleteTask(/*Task $task*/)
    {
        // if(($task->getUser()->getUsername() == "lambda") &&  ($this->getUser()->getRole() === "ROLE_ADMIN" )){ //check if the task is owned by a default user
        //     $em = $this->getDoctrine()->getManager();
        //     $em->remove($task);
        //     $em->flush();

        //     $this->addFlash('success', 'La tâche anonyme a bien été supprimée.');

        //     return $this->redirectToRoute('task_list');
        // }
        // if ($this->getUser() === $task->getUser()) { //check if logged user is the owner of the task
        //     $em = $this->getDoctrine()->getManager();
        //     $em->remove($task);
        //     $em->flush();

        //     $this->addFlash('success', 'La tâche a bien été supprimée.');

        //     return $this->redirectToRoute('task_list');
        // }
        // $this->addFlash('error', 'La tâche ne vous appartient pas.');

        // return $this->redirectToRoute('task_list');
    }


}
